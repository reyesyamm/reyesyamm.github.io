<div class="main_banner_show" style="height: 400px;">
    <div>
        <img src="/images/html5.jpg">
    </div>
    <div>
        <img src="/images/big.jpg">
    </div>
    <div>
        <img src="/images/bussines.jpg">
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('.main_banner_show').slick({
            autoplay:true,
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    });
</script>