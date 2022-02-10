<?= $this->extend('layout/master'); ?>




<?= $this->section('content'); ?>
<div class="main"> 
    <div class="topbar">
       <div class="toggle">
           <ion-icon name="menu-outline"></ion-icon>
       </div>
       <!-- search -->
       <div class="search">
           <label>
               <input type="text" placeholder="Search">
               <ion-icon name="search-outline"></ion-icon>
           </label>
       </div>
       <!-- user img -->
       <div class="user">
           <img src="img/img8.jpg" alt="">
       </div>
   </div>

   <!-- cards -->
   <div class="cardBox">
       <div class="card">
           <div>
               <div class="numbers">1,509</div>
               <div class="cardName">Daily Views</div>
           </div>
           <div class="iconBx">
               <ion-icon name="eye-outline"></ion-icon>
           </div>
       </div>
       <div class="card">
           <div>
               <div class="numbers">110</div>
               <div class="cardName">Sales</div>
           </div>
           <div class="iconBx">
               <ion-icon name="cart-outline"></ion-icon>
           </div>
       </div>
       <div class="card">
           <div>
               <div class="numbers">80</div>
               <div class="cardName">Comment</div>
           </div>
           <div class="iconBx">
               <ion-icon name="chatbubbles-outline"></ion-icon>
           </div>
       </div>
       <div class="card">
           <div>
               <div class="numbers">$6509</div>
               <div class="cardName">Earning</div>
           </div>
           <div class="iconBx">
               <ion-icon name="cash-outline"></ion-icon>
           </div>
       </div>
   </div>

   <!-- tb deta list -->
   <div class="details">
       <!-- oder deta list -->
       <div class="recentOrders">
           <div class="cardHeader">
               <h2>
                   Recent Orders
               </h2>
               <a href="" class="btn">View All</a>
           </div>
           <table>
               <thead>
                   <tr>
                       <td>Name</td>
                       <td>Price</td>
                       <td>Payment</td>
                       <td>Status</td>

                   </tr>
               </thead>
               <tbody>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>paid</td>
                       <td><span class="status delivered">Delivered</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>Due</td>
                       <td><span class="status pending">Pending</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>paid</td>
                       <td><span class="status return">Return</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>Due</td>
                       <td><span class="status pending">Pending</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>paid</td>
                       <td><span class="status delivered">Delivered</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>Due</td>
                       <td><span class="status inprogress">Inprogress</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>Due</td>
                       <td><span class="status pending">Pending</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>Due</td>
                       <td><span class="status inprogress">Inprogress</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>Due</td>
                       <td><span class="status inprogress">Inprogress</span></td>
                   </tr>
                   <tr>
                       <td>Star Pro</td>
                       <td>$90</td>
                       <td>paid</td>
                       <td><span class="status delivered">Delivered</span></td>
                   </tr>
               </tbody>
           </table>
       </div>

       <!-- new customers -->
       <div class="recentCustomers">
           <div class="cardHeader">
               <h2>
                   Recent Customers
               </h2>
           </div>
           <table>
               <tr>
                   <td width='60px'>
                       <div class="imgBx"><img src="img/c1.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Karina dfart <br><span>Spanish</span></h4>

                   </td>
                   <td>
                       <span class="cssNew">New</span>

                   </td>
               </tr>
               <tr>
                   <td width='60px'>
                       <div class="imgBx"><img src="img/c2.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Karina dfart <br><span>Spanish</span></h4>
                   </td>
                   <td>
                       <span class="cssNew">New</span>

                   </td>
               </tr>
               <tr>
                   <td width='60px'>
                       <div class="imgBx"><img src="img/c3.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Karina dfart <br><span>Spanish</span></h4>
                   </td>
                   <td>
                       <span class="cssNew">New</span>
                   </td>
               </tr>
               <tr>
                   <td width='60px'>
                       <div class="imgBx"><img src="img/c4.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Karina dfart <br><span>Spanish</span></h4>
                   </td>
                   <td>
                       <span class="cssNew">New</span>
                   </td>
               </tr>
               <tr>
                   <td width='60px'>
                       <div class="imgBx"><img src="img/c5.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Karina dfart <br><span>Spanish</span></h4>
                   </td>
                   <td>
                       <span class="cssNew">New</span>
                   </td>
               </tr>
               <tr>
                   <td>
                       <div class="imgBx"><img src="img/c6.jpg" alt=""></div>
                   </td>
                   <td>
                       <h4>Karina dfart <br><span>Spanish</span></h4>
                   </td>
                   <td>
                       <span class="cssNew">New</span>
                   </td>
               </tr>
           </table>

       </div>
   </div>
</div>

<?= $this->endsection(); ?>