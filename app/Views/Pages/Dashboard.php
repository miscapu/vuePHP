<?php
include __DIR__."/../Layouts/header.php";
?>

    <table class="table table-striped" id="app">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Description</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="product in products" :key="product.id">
            <th scope="row">{{ product.id }}</th>
            <td>{{ product.name }}</td>
            <td>{{ product.price }}</td>
            <td>{{ product.description }}</td>
        </tr>
        </tbody>
    </table>


<?php
include __DIR__."/../Layouts/footer.php";