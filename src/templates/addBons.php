<div>
    <img src="images/theme/banner.jpg" alt="banner" class="w-100">   
</div>
<div class="container">
    <div class="titre p-2 my-2 rounded">
        <h1 class="text-white"><i class="fas fa-car-side"></i> Bons de commande</h1>
    </div>    
    <form name="formBons" method="POST" action="addBons.php" >
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="customerNumber">Client</label>
                <select id="customerNumber" name="customerName" class="form-control" onchange="donneesClient(this)">
                    <?php foreach($customers as $customer): ?>
                        <option value="<?= intval($customer['customerNumber'])?>"><?= $customer['customerName'] ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-md-6 text-center">
                <a href="addCustomer.php" class="btn btn-dark">Ajouter un nouveau client</a>
            </div>
        </div>
        <div class="form-group">   
            <label for="address">Adresse :</label>   
            <input type="text" class="form-control" id="customerAddress" disabled>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="phone"> Ville :</label>
                <input type="text" class="form-control w-50" id="customerCity" disabled >
            </div>
            <div class="form-group col-md-4">
                <label for="phone"> Pays :</label>
                <input type="text" class="form-control w-50" id="customerCountry" disabled >
            </div>
            <div class="form-group col-md-4">
                <label for="phone"> Téléphone :</label>
                <input type="text" class="form-control w-50" id="customerPhone" disabled >
            </div>
        </div>
        
        
        <div class="text-center">
            <button type="submit" class="btn btn-dark mb-5">Sauvegarder</button>
        </div>
    </form>
</div>
<style>
    .navbar { 
        background-color:cadetblue !important; 
    } 
    
    .titre {
        background-color: cadetblue !important;        
    }
</style>
