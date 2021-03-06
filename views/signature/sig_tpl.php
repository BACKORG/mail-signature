<script id="mail-sig-tpl" type="text/x-handlebars-template">
    <form id="m-s-t-upload-form" method="post" enctype="multipart/form-data" style="display:none;">
        <input type="file" id="v-t-w-file" onchange="signature._imgChange(event);">
    </form>

    <!-- 1 -->
    <div class="email-tpl-wrap col-md-6 col-xs-12">
        <div class="e-t-w-container clearfix" style="position:relative;padding:10px;max-width:350px;clear:both;border:1px solid #ccc;border-radius:5px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);" ></i>
            <i class="fa fa-spinner fa-spin fa-loader"></i>

            <img src="/images/profile.png" width="60" height="60" style="float:left;display:inline-block;margin: 3px 20px 3px 0px;cursor:pointer;border-radius:50%;" onclick="signature._uploadImg(event);" >

            <div style="float:left;">
                <div class="edit-ele name" style="font-size:14px;font-weight: bold;color:#E26A6A;">
                    {{first-last-name}}
                </div>

                <div class="edit-ele position" style="font-size:13px;margin-top:5px;color:#67809F;">
                    {{job-position}}
                </div>

                <div style="margin-top:10px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">email:</span>
                    <a style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>

                <div style="margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">website:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;">{{website}}</a>
                </div>

                 <div>
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">phone:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
                </div>  

                <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;" onclick="signature._gen(event);">Generate your signature</button>
            </div>
        </div>
    </div>

    <!-- 2 -->
    <div class="email-tpl-wrap col-md-6 col-xs-12 pull-right">
        <div class="e-t-w-container clearfix" style="position:relative;padding:10px;max-width:350px;border:1px solid #ccc;border-radius:5px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);" ></i>

            <div style="padding:5px 0 5px 20px;border-left:5px solid #E26A6A;">
                <div class="edit-ele name" style="font-size:14px;font-weight: bold;color:#E26A6A;">
                    {{first-last-name}}
                </div>

                <div class="edit-ele position" style="font-size:13px;margin-top:5px;color:#67809F;">
                    {{job-position}}
                </div>

                <div style="margin-top:10px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;font-weight:bold;">e:</span>
                    <a style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>

                <div style="margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;font-weight:bold;">w:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;">{{website}}</a>
                </div>

                <div>
                    <span style="display:inline-block;font-size:12px;color:#3498DB;font-weight:bold;">p:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
                </div>  
            </div>


            <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>

    <!-- 3 -->
    <div class="email-tpl-wrap col-md-6 col-xs-12">
        <div class="e-t-w-container clearfix" style="position:relative;padding:10px;max-width:350px;clear:both;border:1px solid #ccc;border-radius:5px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);"></i>

            <div style="float:left;margin-bottom:20px;">
                <div class="edit-ele name" style="font-size:14px;font-weight: bold;color:#E26A6A;">
                    {{first-last-name}}
                </div>

                <div class="edit-ele position" style="font-size:13px;margin-top:5px;color:#67809F;">
                    {{job-position}}
                </div>
            </div>

            <div style="float:right;margin-bottom:20px;">
                <div>
                    <span style="display:inline-block;font-size:12px;color:#3498DB;font-weight:bold;">p:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
                </div>  

                <div>
                    <span style="display:inline-block;font-size:12px;color:#3498DB;font-weight:bold;">m:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
                </div>  

                <div style="margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;font-weight:bold;">e:</span>
                    <a style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>
            </div>

            <div style="clear:both;height:5px;background-color:#999;">&nbsp;</div>

            <div class="edit-ele address" style="clear:both;margin-top:20px;font-size:14px;text-align:center;color:#67809F;">
                {{address}}
            </div>  
            

            <button class="btn btn-success btn-xs generate-signature clearfix" style="clear:both;margin-top:10px;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>

    <!-- 4 -->
    <div class="email-tpl-wrap col-md-6 col-xs-12 pull-right">
        <div class="e-t-w-container" style="position:relative;padding:10px;border-radius:5px;max-width:350px;border:1px solid #ccc;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);" ></i>
            <i class="fa fa-spinner fa-spin fa-loader"></i>

            <div style="padding-left:0px;padding-bottom:1px;border-left:5px solid #3EAADD;">
                <img src="/images/profile.png" height="60" style="margin: 10px 10px 10px 20px;cursor:pointer;border-radius:50%;" onclick="signature._uploadImg(event);" >

                <div class="edit-ele name" style="margin-left:20px;font-size:14px;font-weight: bold;color:#E26A6A;">
                    {{first-last-name}}
                </div>

                <div class="edit-ele position" style="margin-left:20px;font-size:13px;margin-top:5px;color:#67809F;">
                    {{job-position}}
                </div>

                <div style="margin-top:10px;margin-left:20px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">email:</span>
                    <a style="display:inline-block;font-size:13px;color:#67809F;padding-right:10px;margin-left:3px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>

                <div style="margin-left:20px;margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">website:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="margin-left:3px;display:inline-block;font-size:13px;color:#67809F;padding-right:10px;">{{website}}</a>
                </div>

                 <div style="margin-left:20px;margin-bottom:10px;">
                    <span style="display:inline-block;font-size:12px;color:#3498DB;">phone:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
                </div>  
            </div>

            <button class="btn btn-success btn-xs generate-signature clearfix" style="margin-top:10px;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>

    <!-- 5 -->
    <div class="email-tpl-wrap col-md-6 col-xs-12">
        <div class="e-t-w-container clearfix" style="position:relative;padding:10px 0 0;max-width:350px;border:1px solid #ccc;border-radius:5px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);" ></i>
            <i class="fa fa-spinner fa-spin fa-loader"></i>

            <div class="edit-ele name" style="color:#E26A6A;font-size:14px;font-weight: bold;margin-left:10px;">
                {{first-last-name}}
            </div>

            <div class="edit-ele position" style="color:#67809F;font-size:13px;margin-top:5px;margin-left:10px;">
                {{job-position}}
            </div>

            <img src="/images/profile.png" height="60" style="margin: 20px 10px 20px 10px;border-radius:50%;cursor:pointer;" onclick="signature._uploadImg(event);">

            <div style="background-color:#3EAADD;padding:10px 20px 25px 10px;">
                <div>
                    <span style="display:inline-block;font-size:12px;color:#E4F1FE;">email:</span>
                    <a style="color:#ECF0F1;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
                </div>
              
                <div style="margin-top:5px;">
                    <span style="display:inline-block;font-size:12px;color:#E4F1FE;">website:</span>
                    <a class="edit-ele c-link" href="{{website}}" target="_blank" style="color:#ECF0F1;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;">{{website}}</a>
                </div>

                 <div>
                    <span style="display:inline-block;font-size:12px;color:#E4F1FE;">phone:</span>
                    <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#ECF0F1;">{{phone}}</span>
                </div>      
            </div>      

            <button class="btn btn-success btn-xs generate-signature clearfix" style="margin: 20px 0 10px 10px;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>


    <!-- 6 -->
    <div class="email-tpl-wrap col-md-6 col-xs-12 pull-right">
        <div class="e-t-w-container clearfix" style="position:relative;padding:10px;max-width:350px;border:1px solid #ccc;border-radius:5px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);" ></i>
            <i class="fa fa-spinner fa-spin fa-loader"></i>

            <div class="edit-ele name" style="color:#3498DB;font-size:14px;font-weight: bold;">
                {{first-last-name}}
            </div>

            <div class="edit-ele position" style="color:#67809F;font-size:13px;">
                {{job-position}}
            </div>

            <div style="margin:20px 0;">
                <img src="/images/profile.png" height="80"  style="cursor:pointer;" onclick="signature._uploadImg(event);">
            </div>


            <div class="edit-ele intro" style="color:#67809F;font-size:13px;">
                {{intro}}
            </div>

            <div style="margin-top:10px;">
                <span style="display:inline-block;font-size:12px;color:#E26A6A;">email:</span>
                <a style="color:#67809F;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
            </div>

             <div>
                <span style="display:inline-block;font-size:12px;color:#E26A6A;margin-bottom:10px;">phone:</span>
                <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
            </div>  

            <button class="btn btn-success btn-xs generate-signature clearfix"  onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>

    <!-- 7 -->
    <div class="email-tpl-wrap col-md-6 col-xs-12">
        <div class="e-t-w-container clearfix" style="position:relative;padding:10px;max-width:350px;border:1px solid #ccc;border-radius:5px;">
            <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);" ></i>
            <i class="fa fa-spinner fa-spin fa-loader"></i>

            <div class="edit-ele name" style="color:#E26A6A;font-size:14px;font-weight: bold;">
                {{first-last-name}}
            </div>

            <div class="edit-ele position" style="color:#67809F;font-size:13px;">
                {{job-position}}
            </div>

            <div style="margin-top:10px;">
                <span style="display:inline-block;font-size:12px;color:#E26A6A;font-weight:bold;">e:</span>
                <a style="color:#67809F;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
            </div>
            
            <div style="margin-top:5px;">
                <span style="display:inline-block;font-size:12px;color:#E26A6A;font-weight:bold;">w:</span>
                <a class="edit-ele c-link" href="{{website}}" target="_blank" style="color:#67809F;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;">{{website}}</a>
            </div>

             <div>
                <span style="display:inline-block;font-size:12px;color:#E26A6A;font-weight:bold;">p:</span>
                <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
            </div>  


            <div style="margin:20px 0;">
                <img src="/images/profile.png" height="60"  style="cursor:pointer;" onclick="signature._uploadImg(event);">
            </div>

            <button class="btn btn-success btn-xs generate-signature clearfix"  onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>


    <!-- 8 -->  
    <div class="email-tpl-wrap col-md-6 col-xs-12 pull-right">
       <div class="e-t-w-container clearfix" style="position:relative;padding:10px 0;max-width:350px;border:1px solid #ccc;border-radius:5px;">
           <i class="fa fa-edit edit-email-tpl" onclick="signature._editTpl(event);" ></i>
           <i class="fa fa-spinner fa-spin fa-loader"></i>

           <div style="background-color:#E26A6A;margin:0 10px;padding:10px;">
               <div class="edit-ele name" style="color:#fff;font-size:14px;font-weight: bold;">
                   {{first-last-name}}
               </div>

               <div class="edit-ele position" style="color:#fff;font-size:13px;">
                   {{job-position}}
               </div>
           </div>

           <div style="clear:both;margin:20px 0;">
               <img src="/images/profile.png" height="70" width="70" style="margin: 0 10px;border-radius:50%;cursor:pointer;float:left;" onclick="signature._uploadImg(event);">

               <div>
                   <span style="display:inline-block;font-size:12px;color:#E26A6A;">email:</span>
                   <a style="color:#67809F;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;" class="edit-ele email" href="mailto:{{email}}">{{email}}</a>
               </div>
               
               <div style="margin-top:5px;">
                   <span style="display:inline-block;font-size:12px;color:#E26A6A;">website:</span>
                   <a class="edit-ele c-link" href="{{website}}" target="_blank" style="color:#67809F;margin-left:3px;display:inline-block;font-size:13px;padding-right:10px;">{{website}}</a>
               </div>

                <div>
                   <span style="display:inline-block;font-size:12px;color:#E26A6A;">phone:</span>
                   <span class="edit-ele phone" style="margin-left:3px;display:inline-block;font-size:13px;margin-top:5px;padding-right:10px;color:#67809F;">{{phone}}</span>
               </div>  
           </div>

           <div style="clear:both;"></div>

           <button class="btn btn-success btn-xs generate-signature clearfix" style="margin: 0px 0 0 10px;" onclick="signature._gen(event);">Generate your signature</button>
        </div>
    </div>
</script>

