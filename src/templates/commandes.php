<div>
    <img src="images/theme/banner.jpg" alt="banner" class="w-100 banner">   
</div>

<div class="container">
    <div class="titre p-2 my-2 rounded">
        <h1 class="text-white"> Liste de bons de commande</h1>
    </div>    

    <table id="listeCommandes" class="table table-responsive-lg table-striped table-bordered table-sm" cellspacing="0">
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
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
   $('#listeCommandes').DataTable(
    {
        "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/French.json"
                    }
    });
 </script>
