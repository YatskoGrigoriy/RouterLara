@extends('layouts.adm.base')

@section('title','Добавить пост')



@section('content')

    <section class="content-header">

    </section>

    <section class="content container-fluid">

        <div class="col-md-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Таблица</h3>
                </div>

                <nav aria-label="Page navigation ">
                    {{ $router->links() }}
                </nav>

                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        @foreach($router as $item)
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Изображение</th>
                                <th>Управление</th>
                                <th>Модель</th>
                                <th>Производитель</th>
                                <th>Тип</th>
                                <th>Стандарт</th>
                                <th>Робота в двух диапазонах (dual band):</th>
                                <th>Интерфейс подключения (LAN-порт):</th>
                                <th>Вход (WAN-порт):</th>
                                <th>USB:</th>
                                <th>Подключения по USB (внешний накопитель / принтер / 3G-модем):</th>
                                <th>Тип антени (внутр / зовн):</th>
                                <th>Количество антен:</th>
                                <th>Описание:</th>
                                <th>Цена:</th>
                                <th>Категория</th>


                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{!! $item->id !!}</td>
                                <td><img width="70" src="/blog/img/routers/{{$item->images}}"/></td>

                                <td class="col-md-3">

                                    {{--Edit--}}
                                    <a title="Edit article" href="{{ url('adm/router/'.$item->id.'/edit') }}"
                                       class="btn btn-warning"><span class="fa fa-edit"></span></a>

                                    {{--Delete--}}
                                    <button title="Delete article" type="button" class="btn btn-danger"
                                            data-toggle="modal"
                                            data-target="#delete_article_{{ $item->id  }}"><span
                                                class="fa fa-trash-o"></span>
                                    </button>

                                </td>
                                <td>{!! $item->model !!}</td>
                                <td>{!! $item->producer !!}</td>
                                <td>{!! $item->type !!}</td>
                                <td>{!! $item->standard !!}</td>
                                <td>{!! $item->dualBand !!}</td>
                                <td>{!! $item->interface !!}</td>
                                <td>{!! $item->wan !!}</td>
                                <td>{!! $item->usb !!}</td>
                                <td>{!! $item->storage !!}</td>
                                <td>{!! $item->typeAntenna !!}</td>
                                <td>{!! $item->numberAntenna !!}</td>
                                <td>{!! $item->text !!}</td>
                                <td>{!! $item->price !!}</td>
                                <td>{!! $item->category_id !!}</td>
                            </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>3</th>
                                <th>5</th>
                                <th>6</th>
                                <th>7</th>
                                <th>8</th>
                                <th>9</th>
                                <th>10</th>
                                <th>11</th>
                                <th>12</th>
                                <th>13</th>
                                <th>14</th>
                                <th>15</th>
                                <th>16</th>
                                <th>17</th>
                            </tr>
                            </tfoot>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header">
                    <h3 class="box-title">
                        <small>Input Form</small>
                    </h3>
                    <!-- tools box -->
                    <div class="pull-right box-tools">
                        <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                            <i class="fa fa-minus"></i></button>
                        <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                                title="Remove">
                            <i class="fa fa-times"></i></button>
                    </div>
                    <!-- /. tools -->
                </div>


                <div class="box-body pad">

                    {!! Form::open(['route'=>'router.store','files' => true]) !!}
                    {{ csrf_field() }}
                    {!! Form::submit('Отправить',['class'=>'btn btn-primary btn-sm buttonText']) !!}

                    <input type="file" name="images" class="form-control btn btn-primary">

                    <input type="text" class="form-control" name="model" placeholder="Модель">
                    <input type="text" class="form-control" name="producer" placeholder="Производитель">
                    <input type="text" class="form-control" name="type" placeholder="Тип">
                    <input type="text" class="form-control" name="standart" placeholder="Стандарт">
                    <input type="text" class="form-control" name="dualBand"
                           placeholder="Робота в двух диапазонах (dual band):">
                    <input type="text" class="form-control" name="interface"
                           placeholder="Интерфейс подключения (LAN-порт):">
                    <input type="text" class="form-control" name="wan" placeholder="Вход (WAN-порт):">
                    <input type="text" class="form-control" name="storage"
                           placeholder="Подключения по USB (внешний накопитель / принтер / 3G-модем):">
                    <input type="text" class="form-control" name="typeAntenna" placeholder="Тип антени (внутр / зовн):">
                    <input type="text" class="form-control" name="numberAntenna" placeholder="Количество антен:">
                    {!! Form::text('price',null ,['class'=>'form-control' ,'placeholder' => 'Цена']) !!}
                    <input type="text" class="form-control" name="usb" placeholder="USB:">

                    <select name="category_id" id="" class="form-control">
                        <option disabled>Выберите категорию</option>
                    </select>


                    {!! Form::textarea('text',null,['class'=>'form-control','id'=>'editor1','placeholder' => 'Описание']) !!}


                   {{--{!!  Form::select('size',['class'=>'form-control'], array('1' => 'роутеры')) !!}--}}



                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </section>


    {{--//modal--}}

    @foreach($router as $item)
        <div class="modal fade" id="delete_article_{{ $item->id  }}" tabindex="-1" role="dialog"
             aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <form class="" action="{{ route('router.destroy', ['id' => $item->id]) }}" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header bg-red">
                            <h4 class="modal-title" id="mySmallModalLabel">Delete article</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>


                        <div class="modal-body">
                            Are you sure to delete article: <b>{{ $item->title }} </b>?

                        </div>
                        <div class="modal-footer">
                            <a href="{{ url('/') }}">
                                <button type="button" class="btn btn-dropbox pull-left " data-dismiss="modal">Close
                                </button>
                            </a>
                            <button type="submit" class="btn btn-danger" title="Delete" value="delete">Delete</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    @endforeach


@endsection
