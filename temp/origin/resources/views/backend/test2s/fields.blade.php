<div class="row mt-4 mb-4">
    <div class="col">
         
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.name'))->class('col-md-2 form-control-label')->for('name') }}
            <div class="col-md-10">
                
                        {{ html()->text('name')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.test2s.name'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.l_name'))->class('col-md-2 form-control-label')->for('l_name') }}
            <div class="col-md-10">
                
                    {{ html()->select('l_name',[   'yes'=>'Yes',   'no'=>'No', ])
                    ->class('form-control')
                    ->placeholder(__('validation.attributes.backend.test2s.l_name'))
                    }}


                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.email'))->class('col-md-2 form-control-label')->for('email') }}
            <div class="col-md-10">
                
                        {{ html()->email('email')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.test2s.email'))
                        
                        
                      
                            ->required() 
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.des'))->class('col-md-2 form-control-label')->for('des') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('des')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.test2s.des'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        
        <div class="form-group row">
            {{ html()->label(__('validation.attributes.backend.test2s.sms'))->class('col-md-2 form-control-label')->for('sms') }}
            <div class="col-md-10">
                
                        {{ html()->textarea('sms')
                        ->class('form-control')
                        ->placeholder(__('validation.attributes.backend.test2s.sms'))
                        
                        
                      
                         }}
                

            </div><!--col-->
        </div><!--form-group-->
        

        <!--end-columns-->
             



    </div><!--col-->
</div><!--row-->