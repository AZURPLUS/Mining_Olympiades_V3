<?php

namespace App\Security;

use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class AppFormAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private UserRepository $userRepository
    )
    {
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');

        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }
    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        
        $user = $this->userRepository->findOneBy(['email' => $token->getUser()->getUserIdentifier()]);
        if ($user) {
            $user->setConnexion($user->getConnexion() + 1);
            $user->setLastConnectedAt(new \DateTime('now', new \DateTimeZone('UTC')));
            $this->userRepository->save($user, true);
        }
    
        $targetPath = $this->getTargetPath($request->getSession(), $firewallName);
        
        if ($targetPath) {
            $request->getSession()->remove('_security_'.$firewallName); // Clean up
            return new RedirectResponse($targetPath);
        }
    
        if(in_array("ROLE_SUPER_ADMIN",$user-> getRoles()))
        {
            return new RedirectResponse($this->urlGenerator->generate('app_dashboard')); // Default redirect
        }
        
        if(in_array("ROLE_ADMIN",$user-> getRoles()))
        {
            return new RedirectResponse($this->urlGenerator->generate('app_dashboard')); // Default redirect
        }

        if(in_array("ROLE_USER",$user->getRoles())){
            return new RedirectResponse($this->urlGenerator->generate('app_frontend_membre_index')); // Default redirect
        }
        
    }
    
    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
