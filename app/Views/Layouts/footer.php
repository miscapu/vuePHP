
</div>
<div class="col">

</div>
</div>
</div>

<!-- Vue import -->
<script src="<?= BASE_URL."/assets/js/vue-js.js";?>"></script>

<!-- Axios Import -->
<script src="<?= BASE_URL."/assets/js/axios-js.js";?>"></script>

<!--- Script -->
<script>

    const app   =   Vue.createApp({
        // Return initial reactive state for
        //component instance
        data(){
            return {
                products:[]
            }
        },
        // called mounted after the component
        // has been mounted
        mounted(){
            axios.get( '<?= BASE_URL."/app/Controllers/ProductController.php";?>' )
            .then(
                response =>
                {
                    this.products = response.data;
                    console.log( response.data );
                })
            .catch( onerror =>
            {
                console.log( onerror.push )
            });
        }
    });
    app.mount( '#app' );

</script>

</body>
</html>