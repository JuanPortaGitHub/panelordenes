<!-- /.Tabla listado de anotaciones -->

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-md-12">

                    <div class="card-body table-responsive p-0" style="height:600px">
                        <table class="table table-head-fixed text-nowrap">



                            <thead>
                            <tr>
                                <th style="width: 15.00%">Fecha</th>
                                <th style="width: 70.00%">Anotacion</th>
                                <th style="width: 10.00%">Usuario</th>
                                <th style="width: 5.00%">Borrar</th>


                            </tr>
                            </thead>
                            <tbody>


                            @foreach($anotaciones as $anotacion)
                                <tr
                                    @if(isset($anotacion->cliente_id) && $anotacion->visiblecliente == 1) bgcolor="#ffffe0"
                                    @elseif(isset($anotacion->user_id) && ($anotacion->visiblecliente == 1)) bgcolor="#8fbc8f"
                                    @elseif(isset($anotacion->user_id) && ($anotacion->visiblecliente == 0)) bgcolor="#d3d3d3"

                                    @endif style="font-size: small">
                                    <td style="width: 15.00%; font-family: Verdana">{{ \Carbon\Carbon::parse($anotacion->created_at)->format('d-m-y H:i') }}</td>
                                    <td style="white-space: pre;width: 70.00%;word-wrap: break-word; font-family: Verdana">{{$anotacion->anotacion}}</td>

                                    <!-- /.COMBINA la columna user_id (de tecnicos) y cliente_id (de cliente) en una sola columna -->

                                    <td style="width: 10.00%; font-family: Verdana">@if(!isset($anotacion->user_id))
                                            {{$anotacion->cliente->nombre}}
                                        @else
                                            {{$anotacion->user->name}}
                                        @endif</td>

                                    <!-- /.Si es anotacion visible a cliente permite eliminar -->

                                    <td style="width: 5%">@if(isset($anotacion->user_id) && ($anotacion->visiblecliente == 1))
                                            <form action="{{action('AnnotationController@destroy', $anotacion->id)}}" method="post">
                                                {{csrf_field()}}
                                                <input name="_method" type="hidden" value="DELETE">

                                                <button class="btn btn-danger btn-xs" type="submit">Borrar</button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach


                            </tbody>

                        </table>
                    </div>
                </div>
            </div>


            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<!-- /.row -->
