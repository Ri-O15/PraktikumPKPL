        document.querySelectorAll('input[name="karbo[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                filterProducts();
            });
        });

        document.querySelectorAll('input[name="paket[]"]').forEach(function(checkbox) {
            checkbox.addEventListener('change', function() {
                filterProducts();
            });
        });

        function filterProducts() {
            let selectedKarbo = [];
            document.querySelectorAll('input[name="karbo[]"]:checked').forEach(function(checkbox) {
                selectedKarbo.push(checkbox.value);
            });

            let selectedPaket = [];
            document.querySelectorAll('input[name="paket[]"]:checked').forEach(function(checkbox) {
                selectedPaket.push(checkbox.value);
            });

            document.querySelectorAll('#productList .product').forEach(function(product) {
                const productKarboCategories = product.getAttribute('data-karbo').split(' ');
                const productPaketCategories = product.getAttribute('data-paket').split(' ');

                const matchesKarbo = selectedKarbo.length === 0 || selectedKarbo.some(karbo => productKarboCategories.includes(karbo));
                const matchesPaket = selectedPaket.length === 0 || selectedPaket.some(paket => productPaketCategories.includes(paket));

                if (matchesKarbo && matchesPaket) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        }

        filterProducts();

        document.getElementById('sortLowToHigh').addEventListener('click', function(event) {
            event.preventDefault();
            sortProducts('lowToHigh');
        });
    
        document.getElementById('sortHighToLow').addEventListener('click', function(event) {
            event.preventDefault();
            sortProducts('highToLow');
        });
    
        function sortProducts(order) {
            const productList = document.getElementById('productList');
            const products = Array.from(productList.getElementsByClassName('product'));
    
            products.sort((a, b) => {
                const priceA = parseInt(a.getAttribute('data-price'));
                const priceB = parseInt(b.getAttribute('data-price'));
    
                if (order === 'lowToHigh') {
                    return priceA - priceB;
                } else if (order === 'highToLow') {
                    return priceB - priceA;
                }
            });
    
            products.forEach(product => productList.appendChild(product));
        }

        