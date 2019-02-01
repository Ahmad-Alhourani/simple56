<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
                
                 <th>@sortablelink('name', trans('labels.backend.test2s.table.name')) </th>
                
                 <th>@sortablelink('l_name2', trans('labels.backend.test2s.table.l_name2')) </th>
                
                 <th>@sortablelink('l_name', trans('labels.backend.test2s.table.l_name')) </th>
                
                 <th>@sortablelink('email', trans('labels.backend.test2s.table.email')) </th>
                
                 <th>{{ __('labels.backend.test2s.table.sms') }}</th>
                
            <th>{{ __('labels.general.actions') }}</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($test2s as $test2)
        <tr>
             
                <td>{{  $test2->name }}</td>  
                <td>{{  $test2->l_name2 }}</td>  
                <td>{{  $test2->l_name }}</td>  
                <td>{{  $test2->email }}</td>  
                <td>{{  $test2->sms }}</td>  
                

               <td>{!! $test2->action_buttons !!}</td>
        </tr>

        @endforeach
        </tbody>
    </table>
</div>