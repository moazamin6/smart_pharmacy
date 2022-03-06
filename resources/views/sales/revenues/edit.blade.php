@extends('layouts.admin')

@section('title', trans('general.title.edit', ['type' => trans_choice('general.revenues', 1)]))

@section('content')
    @if (($recurring = $revenue->recurring) && ($next = $recurring->getNextRecurring()))
        <div class="media mb-3">
            <div class="media-body">
                <div class="media-comment-text">
                    <div class="d-flex">
                        <h5 class="mt-0">{{ trans('recurring.recurring') }}</h5>
                    </div>

                    <p class="text-sm lh-160 mb-0">{{ trans('recurring.message', [
                            'type' => mb_strtolower(trans_choice('general.revenues', 1)),
                            'date' => $next->format($date_format)
                        ]) }}
                    </p>
                </div>
            </div>
        </div>
    @endif

    <div class="card">
        {!! Form::model($revenue, [
            'method' => 'PATCH',
            'files' => true,
            'route' => ['revenues.update', $revenue->id],
            'role' => 'form',
            'id' => 'transaction',
            '@submit.prevent' => 'onSubmit',
            '@keydown' => 'form.errors.clear($event.target.name)',
            'class' => 'form-loading-button',
            'novalidate' => 'true'
        ]) !!}

        <div class="card-body">
            <div class="row">
                {{ Form::dateGroup('paid_at', trans('general.date'), 'calendar', ['id' => 'paid_at', 'required' => 'required', 'show-date-format' => company_date_format(), 'date-format' => 'Y-m-d', 'autocomplete' => 'off'], Date::parse($revenue->paid_at)->toDateString()) }}

                {!! Form::hidden('currency_code', $revenue->currency_code, ['id' => 'currency_code', 'class' => 'form-control', 'required' => 'required']) !!}
                {!! Form::hidden('currency_rate', null, ['id' => 'currency_rate']) !!}

                {{ Form::moneyGroup('amount', trans('general.amount'), 'money-bill-alt', ['required' => 'required', 'autofocus' => 'autofocus', 'currency' => $currency, 'dynamic-currency' => 'currency'], $revenue->amount) }}

                {{ Form::selectAddNewGroup('account_id',  trans_choice('general.accounts', 1), 'university', $accounts, $revenue->account_id, ['required' => 'required', 'path' => route('modals.accounts.create'), 'change' => 'onChangeAccount']) }}

                {{ Form::selectRemoteAddNewGroup('contact_id', trans_choice('general.customers', 1), 'user', $customers, $revenue->contact_id, ['path' => route('modals.customers.create'), 'remote_action' => route('customers.index')]) }}

                {{ Form::textareaGroup('description', trans('general.description')) }}

                {{ Form::selectRemoteAddNewGroup('category_id', trans_choice('general.categories', 1), 'folder', $categories, $revenue->category_id, ['required' => 'required', 'path' => route('modals.categories.create') . '?type=income', 'remote_action' => route('categories.index'). '?search=type:income enabled:1']) }}

                {{ Form::recurring('edit', $revenue) }}

                {{ Form::selectGroup('payment_method', trans_choice('general.payment_methods', 1), 'credit-card', $payment_methods, $revenue->payment_method) }}

                {{ Form::textGroup('reference', trans('general.reference'), 'file',[]) }}

                @if ($revenue->invoice)
                    {{ Form::textGroup('document', trans_choice('general.invoices', 1), 'file-invoice', ['disabled' => 'true'], $revenue->invoice->document_number) }}
                    {{ Form::hidden('document_id', $revenue->invoice->id) }}
                @endif

                {{ Form::fileGroup('attachment', trans('general.attachment'), '', ['dropzone-class' => 'w-100', 'multiple' => 'multiple', 'options' => ['acceptedFiles' => $file_types]], $revenue->attachment, 'col-md-12') }}
            </div>
        </div>

        @can('update-sales-revenues')
            <div class="card-footer">
                <div class="row save-buttons">
                    {{ Form::saveButtons('revenues.index') }}
                </div>
            </div>
        @endcan

        {{ Form::hidden('type', 'income') }}
        {!! Form::close() !!}
    </div>
@endsection

@push('scripts_start')
    <script src="{{ asset('public/js/banking/transactions.js?v=' . version('short')) }}"></script>
@endpush
