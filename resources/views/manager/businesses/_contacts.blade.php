@section('footer_scripts')
@parent
<script>
/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">{{ trans('manager.contacts.list.msg.filter_no_results') }}</td></tr>'));
        }
    });
});
</script>
@endsection

@section('css')
<style>
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
</style>
@endsection

<div class="row">
    <div class="panel panel-primary filterable">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('manager.contacts.title') }}</h3>
            <div class="pull-right">
                <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> {{ trans('manager.contacts.list.btn.filter') }}</button>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="{{ trans('manager.contacts.list.header.firstname') }}" disabled></th>
                    <th><input type="text" class="form-control" placeholder="{{ trans('manager.contacts.list.header.lastname') }}" disabled></th>
                    <th><input type="text" class="form-control" placeholder="{{ trans('manager.contacts.list.header.username') }}" disabled></th>
                    <th><input type="text" class="form-control" placeholder="{{ trans('manager.contacts.list.header.mobile') }}" disabled></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($business->contacts as $contact)          
                    <tr>
                        <td>{!! link_to( route('manager.addressbook.show', [$business, $contact->id]), $contact->firstname) !!}</td>
                        <td>{{ $contact->lastname }}</td>
                        <td>{{ $contact->username }}</td>
                        <td>{{ $contact->mobile }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
{!! Button::primary(trans('manager.businesses.contacts.btn.create'))->asLinkTo( route('manager.addressbook.create', $business) ) !!}
</div>
