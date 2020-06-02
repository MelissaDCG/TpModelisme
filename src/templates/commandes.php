<div>
    <img src="images/theme/banner.jpg" alt="banner" class="w-100">   
</div>

<div class="container">
    <div class="titre p-2 my-2 rounded">
        <h1 class="text-white"> Liste de bons de commande</h1>
    </div>    

    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Commande</th>
            <th scope="col">Date de la commande</th>
            <th scope="col">Date de livraison</th>
            <th scope="col">Statut</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($orders as $order): ?>
                <tr>
                    <td scope=row> <a href="order-form.php?orderNumber=<?= $order['orderNumber'] ?>"><?= $order['orderNumber'] ?></a></td>
                    <td><?= $order['orderDate'] ?></td>
                    <td><?= $order['shippedDate'] ?></td>
                    <td><?= $order['status'] ?></td>
                </tr>
            <?php endforeach ?>    
        </tbody>
    </table>

</div>
<style>
    .navbar { 
        background-color:cadetblue !important; 
    } 
    .titre {
        background-color: cadetblue !important;
        
    }
</style>