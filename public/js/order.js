// let params = window.location.href.split("/");
// console.log(params)
// let tableId = params[params.length - 1];
// displayOrder(tableId)
//
// let array = [];
//
//
//
// function displayOrder(id) {
//     let _url = origin + `/api/products/order/${id}`
//     $.ajax({
//         url: _url,
//         type: "GET",
//         success: function (res) {
//             console.log(res)
//             detail = res[0];
//             data = res[1];
//             array = res[1];
//             displayProduct(data);
//
//         }
//     });
//
//
// }
//
// function deleteOrder(productId, tableId) {
//     let _url = origin + `/tables/api/deleteFromOrder/${productId}/table/${tableId}`
//     $.ajax({
//         url: _url,
//         type: "DELETE",
//         success: function (res) {
//             $("#order_" + productId).remove()
//             toastr.success("Delete Success!")
//             displayProduct(res)
//         }
//     })
//
// }
//
// function displayProduct(data) {
//     let html = "";
//     data.forEach(function (product) {
//         console.log(product)
//         html += `<div class="col-6 mt-5 ">
//                                 <div class="card">
//                                     <div class="card-inner ">
//                                         <a onclick="updateOrder(${product.id},${detail.id})">
//                                             <img style="width: 100%" src="${origin}/image/${product.image}">
//                                         </a>
//                                         <h4 class="card-title" style="text-align: center">${product.name}</h4>
//                                         <h4 class="card-text"
//                                             style="text-align: center">${product.price} ₫</h4>
//                                     </div>
//                                 </div>
//                             </div>`
//
//     });
//     $("#col1").html(html)
// }
//
// function updateOrder(productId, tableId) {
//     let sum = 0;
//     let _url = origin + `/tables/api/addToOrder/${productId}/table/${tableId}`
//     $.ajax({
//         url: _url,
//         type: "GET",
//         success: function (res) {
//             console.log(res)
//             let html = "";
//             for (let index in res) {
//                 let product = res[index];
//                 console.log(product)
//                 html += `<tr id="order_${product.id}">
//                             <td colspan="4">${product.name}</td>
//                             <td>${product.price}</td>
//                             <td style="text-align: center">${product.quantity}</td>
//                         <td>${product.quantity * product.price} ₫</td>
//                         <td><a onclick="deleteOrder('+p+')">Delete</a></td>
//                         </tr>`
//                     `<tr>
//                         <td style="text-align: center" colspan="3">Total</td>
//                         <td style="text-align: center" colspan="2">${sum += product.quantity * product.price}₫</td>
//                         </tr>
//                         <tr>
//                         <td colspan="5"><a class="btn btn-success" style="width: 100%">Pay</a></td>
//                         </tr>`;
//             }
//             $("#col2").html(html);
//             toastr.success("update success")
//         }
//     })
//
//
// }
//
//
// function searchOrderApi() {
//     let searchValue = $(this).val()
//     console.log(searchValue)
//     let result = []
//     for (let i = 0; i < data.length; i++) {
//         if (data[i].name.toLowerCase().includes(searchValue.toLowerCase())) {
//             result.push(data[i])
//         }
//     }
//     displayProduct(result);
// }
//
//
// $("#search-order").on("input", searchOrderApi)
