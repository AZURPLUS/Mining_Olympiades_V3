<?php

namespace App\Service;

use App\Repository\UserRepository;
use http\Exception\InvalidArgumentException;

class AllRepositories
{
    public function __construct(
        private UserRepository $userRepository
    )
    {
    }

    public function getUsers(string $email ): array
    {
        if (empty($email)){
            throw new InvalidArgumentException("Le nom utilisateur ne peut être vide");
        }

        try {
            $getUsers = $this->userRepository->findWithout($email);
        } catch (\Exception $e){
            error_log("Erreur lors de la récupération des utilisateurs : " .$e->getMessage());
            return [];
        }

        return array_map(static function ($getUser) {
            $roleMapping = [
                'ROLE_ADMIN' => "Administrateur",
                'ROLE_COORDINATEUR' => "Coordinateur",
                'ROLE_USER' => "Utilisateur"
            ];
            $roles = $getUser->getRoles()[0] ?? $getUser->getRoles();
            $role = $roleMapping[$roles] ?? 'Utilisateur';

            return [
                'id' => $getUser->getId(),
                'userIdentifier' => $getUser->getUserIdentifier(),
                'role' => $role,
                'connexion' => $getUser->getConnexion(),
                'lastConnectedAt' => $getUser->getLastConnectedAt()
            ];
        }, $getUsers);

    }
}