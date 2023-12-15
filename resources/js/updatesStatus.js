function updateStatus() {
    $.ajax({
        url: '/update-status', // L'URL à laquelle envoyer la requête HTTP
        type: 'POST', // La méthode de la requête (dans ce cas, POST)
        data: {status: 'accept'}, // Les données à envoyer avec la requête

        success: function(response) {
            // Le statut a été mis à jour avec succès
            alert(response.message);
        },
        error: function(error) {
            // Une erreur s'est produite lors de la mise à jour du statut
            alert('Une erreur s\'est produite!');
        }
    });
}