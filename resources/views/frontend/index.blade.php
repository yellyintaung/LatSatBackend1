@extends('frontend.master')
@section('content')
<div class="banner" style="padding-top: 100px;">
    <img src="images/banner.png" alt="banner" width="100%">
</div>

<section>
    <h3 class="default-color mb-header-font text-center py-5 font-weight-bold">ရောင်းအားအကောင်းဆုံးပစ္စည်းများ</h3>
    <section class="regular slider">
        <div class="card driver-card">
            <img src="images/raw fresh chicken.jpg" class="card-img-top" style="width: 100%;height: 180px;" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-font default-color">အသားအမျိုးမျိုး</h5>
                <p class="card-text">ဗမာကြက်ကောင်လုံး(Burmese Chicken)</p>
                <p class="card-text"><small>၁ပိဿာ - ၆၀၀၀ကျပ်</small></p>
            </div>
        </div>
        
        <div class="card driver-card">
            <img src="images/salmon.jpg" class="card-img-top" style="width: 100%;height: 180px;" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-font default-color">ငါးနှင့်ပင်လယ်စာ</h5>
                <p class="card-text">ဆော်လ်မွန်ငါး(Salmon)</p>
                <p class="card-text"><small>၁ပိဿာ - ၆၀၀၀ကျပ်</small></p>
            </div>
        </div>
        
        <div class="card driver-card">
            <img src="images/onion.jpg" class="card-img-top" style="width: 100%;height: 180px;" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-font default-color">ဟင်းသီးဟင်းရွက်</h5>
                <p class="card-text">ကြက်သွန်နီသွန်နီ(Onion)</p>
                <p class="card-text"><small>၁ပိဿာ - ၆၀၀၀ကျပ်</small></p>
            </div>
        </div>
        
        <div class="card driver-card">
            <img src="images/strawberries.jpg" class="card-img-top" style="width: 100%;height: 180px;" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-font default-color">အသီးအနှံ</h5>
                <p class="card-text">စတော်ဘယ်ရီသီး(Strawberry)</p>
                <p class="card-text"><small>၁ပိဿာ - ၆၀၀၀ကျပ်</small></p>
            </div>
        </div>
        
        <div class="card driver-card">
            <img src="images/tumeric.png" class="card-img-top" style="width: 100%;height: 180px;" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-font default-color">ဟင်းခတ်အမွှေးအကြိုင်</h5>
                <p class="card-text">နနွင်းမှုန့်မှုန့်(tumeric)</p>
                <p class="card-text"><small>၁ပိဿာ - ၆၀၀၀ကျပ်</small></p>
            </div>
        </div>
        
        <div class="card driver-card">
            <img src="images/rose.jpg" class="card-img-top" style="width: 100%;height: 180px;" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-font default-color">ပန်းအမျိုးမျိုး</h5>
                <p class="card-text">နှင်းဆီပန်း(rose)</p>
                <p class="card-text"><small>၁ပိဿာ - ၆၀၀၀ကျပ်</small></p>
            </div>
        </div>
    </section>
</section>
@endsection
@push('script')
<script type="text/javascript">
    $(document).ready(function () {
        $(".searchicon").click(function () {
            
            $(".search-box").toggle();
            
            $("input[type='text'].search").focus();
            
        });
        var count = 0;
        $(".add").click(function () {
            
            count++;
            
            $(".count").html(count);
            
            $(".count").css("background", "#F70024");
            
        });
        $('.owl-carousel').owlCarousel({
            
            loop: true,
            
            margin: 30,
            
            nav: true,
            
            dots: true,
            
            autoplay: true,
            
            responsive: {
                
                0: {
                    
                    items: 1
                    
                },
                
                600: {
                    
                    items: 1
                    
                },
                
                1000: {
                    
                    items: 4
                    
                }
                
            }
            
        });
    });
    
</script>
@endpush