<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <p></p>
            </ul>
        </div>
    </div>
    
    <div class="container pb-60">
        <div class="row">
            <div class="col-md-12 text-center">
            @if(Route::has('login'))
                @auth
                    @if(Auth::user()->user_type === 'admin')
                        @php
                            $this->redirect('/admin/dashboard');
                        @endphp
                    @else
                        @php
                            $this->redirect('/user/dashboard');
                        @endphp                                            
                    @endif
                @else
                    @php
                        $this->redirect('/login');
                    @endphp    
                @endif
            @endif
            </div>
        </div>
    </div><!--end container-->

</main>
<!--main area-->
