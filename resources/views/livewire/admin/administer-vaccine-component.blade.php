<div>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <a href="/admin/createadministervaccine">
                    <button type="button" class="btn btn-primary">
                        New Vaccine Administer
                    </button>
                </a>
            </div>
            <div class="row">
                <div>
                    <style>
                        nav svg{
                            height: 20px;
                        }
                        nav .hidde{
                            display: block !important;
                        }
                    </style>
                    <div class="container" style="padding: 30px 0;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        All Vaccines
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Information ID</th>
                                                    <th>Patient Name</th>
                                                    <th>Vaccine</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($vaccines as $vaccine)
                                                <tr>
                                                    <td>{{ $vaccine->id }}</td>
                                                    <td>{{ (DB::table('users')->where('id', ($vaccine->user_id))->value('name')) }}</td>
                                                    <td>{{ (DB::table('vaccines')->where('id', ($vaccine->vaccine_id))->value('name')) }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                    <div class="widget mercado-widget categories-widget">
                        <div class="widget-content">
                            <ul class="list-category">
                                <li class="category-item">
                                    <a href="{{ route('admin.dashboard') }}" class="cate-link">Back to Dashboard</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--end sitebar-->
            </div><!--end row-->
        </div><!--end container-->
    </main>
</div>
