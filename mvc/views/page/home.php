<?php
for ($i = 0; $i < sizeof($data["productbyid"]); $i++) {
    echo '<section>
    
    <div class="section-container">
        <h1>' . $data["categories"][$i]["tenLoai"] . '</h1>
        <div class="section-content autoplay">
        ';
    foreach ($data["productbyid"][$i] as $dataproduct) {
        extract($dataproduct);
        echo '
           <div class="product">
               <div class="block">
                   <a href="/asm/detail/detailproduct/' . $idSP . '"><img src="/asm/public/image/' . $hinhanh . '" alt="image"></a>
               </div>
               <div class="block">
                   <h5>' . $tenSP . '</h5>
               </div>
               <div class="block">
                   <h3>' . $gia . '</h3>
               </div>
               <div class="block">
                   <button class="buy">Mua Ngay</button>
               </div>
           </div>
         
     ';
    }
    echo '
    </div>
    </div>
        </section>';
}

?>
