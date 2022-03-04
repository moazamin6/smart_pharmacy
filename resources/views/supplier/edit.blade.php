@extends('layout.main') @section('content')
    @if(session()->has('not_permitted'))
        <div class="alert alert-danger alert-dismissible text-center">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div>
    @endif
    <section class="forms">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>{{trans('file.Update Supplier')}}</h4>
                        </div>
                        <div class="card-body">
                            <p class="italic">
                                <small>{{trans('file.The field labels marked with * are required input fields')}}
                                    .</small></p>
                            {!! Form::open(['route' => ['supplier.update', $lims_supplier_data->id], 'method' => 'put', 'files' => true]) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.name')}} *</strong> </label>
                                        <input type="text" name="name" value="{{$lims_supplier_data->name}}" required
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.Image')}}</label>
                                        <input type="file" name="image" class="form-control">
                                        @if($errors->has('image'))
                                            <span>
                                       <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.VAT Number')}}</label>
                                        <input type="text" name="vat_number" value="{{$lims_supplier_data->vat_number}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.Email')}}</label>
                                        <input type="email" name="email" value="{{$lims_supplier_data->email}}"
                                               class="form-control">
                                        @if($errors->has('email'))
                                            <span>
                                       <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.Phone Number')}}</label>
                                        <input type="text" name="phone_number"
                                               value="{{$lims_supplier_data->phone_number}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.Address')}}</label>
                                        <input type="text" name="address" value="{{$lims_supplier_data->address}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.City')}}</label>
                                        <input type="text" name="city" value="{{$lims_supplier_data->city}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.State')}}</label>
                                        <input type="text" name="state" value="{{$lims_supplier_data->state}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.Postal Code')}}</label>
                                        <input type="text" name="postal_code"
                                               value="{{$lims_supplier_data->postal_code}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{trans('file.Country')}}</label>
                                        <input type="text" name="country" value="{{$lims_supplier_data->country}}"
                                               class="form-control">
                                    </div>
                                </div>
                                <?php
                                $selected_companies = $lims_supplier_data->companies;
                                if (!empty($selected_companies)) {
                                    $selected_companies = explode(',', $selected_companies);
                                } else {
                                    $selected_companies = [];
                                }
                                ?>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>{{ 'Companies' }}</label>
                                        <input type="hidden" name="companies_hidden" value="">
                                        <select name="companies[]" multiple class="selectpicker form-control"
                                                data-live-search="true" title="Select Companies...">
                                            @foreach($companies as $company)
                                                <option
                                                    <?= in_array($company['id'], $selected_companies) ? 'selected' : '' ?>
                                                    value="{{$company['id']}}">{{$company['title']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mt-3">
                                        <input type="submit" value="{{trans('file.submit')}}" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

@push('scripts')
    <script type="text/javascript">
        $("ul#people").siblings('a').attr('aria-expanded', 'true');
        $("ul#people").addClass("show");
    </script>
@endpush
