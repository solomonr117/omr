
// ----------------------------------------------------------------

const openModal = document.querySelector('.seller_page_popupdialog');

const btn = document.querySelector('.seller_page_button');

// const seller_page_rmv_btn = document.querySelector('.seller_page_remove_btn');

const co = document.getElementById('confirm_order');

co.onclick= function(){
     alert('Order Placed !');
     console.log('Order Placed');
     var php = "<?php header('Location: purhcase.php');?>";
}

btn.onclick= function(){
     openModal.style.display="flex";
   
}



