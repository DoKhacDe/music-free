<x-layouts.app :absolute-header="true">
    <div style="display: flex; flex-wrap: wrap">
        @foreach(range(1, 100) as $i)
            <img style=""
                 src="http://75.119.134.66/image.png?title={{ 'hha-product-' . $i }}&background=https://customedge.co/storage/product-contents/nPXxPKsTKISETf1FV4mIJLZpWtwTdLfDKKwDlHef.jpg&product_image=https://cdn.shopify.com/s/files/1/0499/6379/4592/files/Photo-Inserted_-Baby-Girl-1St-Christmas-Personalized-Heart-Shaped-Ceramic-Ornament1.jpg&template=common1http://75.119.134.66/image.png?title=(Photo%20Inserted)%20Baby%20Girl%201St%20Christmas%20-%20Personalized%20Heart%20Shaped%20Ceramic%20Ornament&background=https://customedge.co/storage/product-contents/nPXxPKsTKISETf1FV4mIJLZpWtwTdLfDKKwDlHef.jpg&product_image1=https://cdn.shopify.com/s/files/1/0499/6379/4592/files/Photo-Inserted_-Baby-Girl-1St-Christmas-Personalized-Heart-Shaped-Ceramic-Ornament1.jpg&product_image2=https://cdn.shopify.com/s/files/1/0499/6379/4592/files/photoinsertedinstruction_252f67f6-9b00-4b07-9a5c-e3c822b34e6b.jpg&product_image3=https://cdn.shopify.com/s/files/1/0499/6379/4592/files/Photo-Inserted_-Baby-Girl-1St-Christmas-Personalized-Heart-Shaped-Ceramic-Ornament2.jpg&product_image4=https://cdn.shopify.com/s/files/1/0499/6379/4592/files/Photo-Inserted_-Baby-Girl-1St-Christmas-Personalized-Heart-Shaped-Ceramic-Ornament3.jpg&template=template-tdd"
                 alt="">
        @endforeach
    </div>
</x-layouts.app>
