<div>
    <main id="main" class="main-site left-sidebar">

        <div class="container">

            <div class="wrap-breadcrumb">
                <ul>
                    <p></p>
                </ul>
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
                                                    <th>Vaccine</th>
                                                    <th>Vaccine Administrator</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($vaccines as $vaccine)
                                                <tr>
                                                    <td>{{ $vaccine->id }}</td>
                                                    <td>{{ (DB::table('vaccines')->where('id', ($vaccine->vaccine_id))->value('name')) }}</td>
                                                    <td>{{ (DB::table('users')->where('id', ($vaccine->hospital_id))->value('name')) }}</td>
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
            </div><!--end row-->
        </div><!--end container-->
    </main>
</div>
