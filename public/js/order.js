// let params = window.location.split("/");
// console.log(params)
// displayOrder(1)
//
// // let data = [];
// function displayOrder(id) {
//     let _url = origin + `/api/products/order/${id}`
//     $.ajax({
//         url: _url,
//         type: "GET",
//         success: function (res) {
//             console.log(res)
//             detail = res[0];
//             data = res[1];
//             let html = "";
//             data.forEach(function (product) {
//                 console.log(product)
//                 html += `<div class="col-6 mt-5 ">
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
//             });
//             $("#col1").html(html)
//         }
//     });
//
//
// }
//
// function updateOrder(productId, tableId) {
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
//                 html += `<tr>
//                             <td colspan="4">${product.name}</td>
//                             <td>${product.price}</td>
//                             <td style="text-align: center">${product.quantity}</td>
//                             <td>${product.quantity * product.price} ₫</td>
//                             <td>
//                                 <a href="">Delete</a>
//                             </td>
//                         </tr>`;
//             }
//             $("#col2").html(html);
//         }
//     })
//
// }
//
