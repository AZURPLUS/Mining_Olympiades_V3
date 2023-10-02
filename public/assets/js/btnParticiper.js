document.addEventListener("DOMContentLoaded", function () {
    const boutonsParticiper = document.querySelectorAll(".boutonParticiper");
    const urlRoot = window.location.origin;

    boutonsParticiper.forEach(function (boutonParticiper) {
        boutonParticiper.addEventListener("click", async function () {
            const {value: profil} = await Swal.fire({
                title: 'INSCRIPTION',
                text: "Participer aux Mining Olympiades 2023 en tant que :",
                icon: "warning",
                input: 'select',
                inputOptions: {
                    'Compétitions': {
                        membre: 'Membre du GPMCI',
                        nonMembre: 'Non membre du GPMCI',
                    },
                    'Journée scientifique': {
                        etudiant: 'Etudiant',
                    },
                    'Sponsoring': {
                        sponsor: 'Sponsor',
                    },
                },
                inputPlaceholder: '-- Choisissez votre profil --',
                showCancelButton: true,
                preConfirm: (value) => {
                    if (value === 'membre') {
                        window.location.href = urlRoot + '/membre/';
                    } else if (value === 'nonMembre') {
                        window.location.href = urlRoot + '/participation/';
                    } else if (value === 'sponsor') {
                        window.location.href = urlRoot + '/sponsoring/';
                    } else {
                        // La sélection a été faite mais n'a pas conduit à une redirection
                        // Ajoutez le code ici si nécessaire
                        swal.fire('En cours....')
                    }
                }
            })

        })
    })
});
