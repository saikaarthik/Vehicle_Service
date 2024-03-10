<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="topNavBar">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm"
                 type="button" data-toggle="collapse"
                  data-target="#navbarSupportedContent" 
                  aria-controls="navbarSupportedContent" 
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span 
                  class="navbar-toggler-icon">
                </span>
                </button>
                <a class="navbar-brand"  href="./">
                VSMS
                </a>

               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link" style="color:black" aria-current="page" href="./">Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color:black" href="./?p=about">About Us</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                    </div>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>