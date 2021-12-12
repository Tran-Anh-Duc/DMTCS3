$(document).ready(function () {
    let data = []
    let _url = origin + "/api/products/list";
    $("#search-product").on("input", search);
    $.ajax({
        url: _url,
        type: "GET",
        success: function (res) {
            console.log(res)
            data = res
            displayProduct(res)
        }
    });

function displayProduct(products) {
            let html = ""
            products.forEach(function (product){
               html += `<div class="card col-4 mt-5 mb-5" >
                        <div class="card-inner p-1" style="border-radius: 5px">
                            <img style="width: 100%" src= ${origin}"/public/image/${product.image}" >
                            <h4 class="card-title">${product.name}</h4>
                            <h4 class="card-text">${product.price}₫</h4>
                            <a style="width: 20px" type="button" class="btn btn-warning" href="">
                                <i class="fas fa-info"></i>
                            </a>
                            <a type="button" class="btn btn-success" href="">
                                Update
                            </a>
                            <a type="button" class="btn btn-danger" onclick="return confirm('Are you sure ??')"
                               href="">
                                Delete
                            </a>
                        </div>
                    </div>`
            });
            $("#product-list").html(html);
        }

function search() {
    let searchValue = $(this).val()
    let result = [];
    for (let i = 0; i < data.length; i++) {
        if (data[i].name.includes(searchValue)) {
            result.push(data[i])
        }
    }
    displayProduct(result)
}



});
