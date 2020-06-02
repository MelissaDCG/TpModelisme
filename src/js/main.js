function donneesClient(client) {
    let idClient = parseInt(client.value);
    console.log(idClient);
    $.ajax({
        method: "POST",
        url: "donneesClient.php", //Chemin d'accès du script php
        data: {customerNumber : idClient} , //variables à envoyer 
        dataType: "json", //format
        success: function(response){ //Si tout se déroule bien on traite le retour
            console.log(response);
            var address = response[0].addressLine1 + ' ' + response[0].addressLine2; 
            console.log(address);
            var city = response[0].city;
            console.log(city);
            var country = response[0].country;
            console.log(country);
            var phone = response[0].phone;
            console.log(phone);
           

            //Peupler le formulaire avec les valeurs récupérées
            $('#customerAddress').val(address);
            $('#customerCity').val(city);  
            $('#customerCountry').val(country);   
            $('#customerPhone').val(phone);       
        },
        error: function(jqXHR, textStatus, errorThrown) { //si il y a un error 
            console.log(textStatus, errorThrown);
        }
    });
}
      