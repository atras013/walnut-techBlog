<x-admin-master>

  
    @section('title')
   
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
    <script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @notifyCss
    <script>
      var editor_config = {
        path_absolute : "/",
        selector: 'textarea.my-editor',
        relative_urls: false,
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table directionality",
          "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        file_picker_callback : function(callback, value, meta) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;
    
          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
          if (meta.filetype == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }
    
          tinyMCE.activeEditor.windowManager.openUrl({
            url : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no",
            onMessage: (api, message) => {
              callback(message.content);
            }
          });
        }
      };
    
      tinymce.init(editor_config);



     
    </script>
    
    
       
    @stop


    @section("content")
 
    
    
    
    

      <div class="posts">
        <div class="header">
          <ion-icon class="icon" name="pencil-outline"></ion-icon>
         <h3> پست جدید </h3>
        </div>

        <form method="POST" class="form" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf 
         
        <div class="title-section">
          <div class="form-group">
            <label class="title-label" for="title"> عنوان را وارد کنید </label>
            <input  
            class="
            form-control
            @error('title')

               is-invalid

            @enderror
            " 
            type="text" 
            name="title" 
            >
            
             @error('title')

               <span class="invalid-feedback d-block" role="alert">
                   <strong>{{ $message }}</strong>
               </span>

               @enderror

        </div>
          
        <div class="form-group post_image">

          <label class="label" for="title">  عکس اصلی پست را انتخاب کنید </label>
          <input class="file" name="post_image" type="file">
          
        
         </div>

        </div>


        <div class="categories-and-tags d-flex flex-column justify-content-between p-4">
          <div class="row d-flex">
            <P  class="categories-header col-md-11">دسته بندی ها</P>
            <div class="post-categories col-md-12"> 
           
            <select id="choices-multiple-remove-button" name="categories[]" placeholder="دسته بندی را انتخاب کنید" multiple>
                    
                   @foreach ($categories as $category )

                       <option value="{{  $category->id }}">{{ $category->name }}</option>
                     
                   @endforeach
                   
                </select> 
              
              </div>
        </div>
          <div class="row d-flex mt-1">
            <P  class="tags-header col-md-11"> تگ ها را انتخاب کنید </P>
            <div class="tags col-md-12"> 
           
            <select id="choices-multiple-remove-button" name="tags[]" placeholder="دسته بندی را انتخاب کنید" multiple>
                    
                   @foreach ($tags as $tag )

                       <option value="{{  $tag->id }}">{{ $tag->name }}</option>
                     
                   @endforeach
                   
                </select> 
              
              </div>
        </div>
        
          <button type="submit" class=" btn btn-primary create-btn" >ساخت</button>

        </div>

        <div class="post-body mb-5">
          <div class="form-group">
            <label class="body-header"  for="body">متن</label>
              
            <textarea class="form-control my-editor" name="body" id="mytextarea" cols="30"  rows="20"></textarea>
             
              </div>
              
          </form>
        </div>
        </div>
        
        </form>

        

    </div>

    <style>
      
      

    </style>      
       

    @stop
   
    @section('script')
    <script>
      $(document).ready(function(){

       var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true,
       maxItemCount:10,
       searchResultLimit:50,
       renderChoiceLimit:50

       });


    });

    
</script>

@notifyJs
  <x:notify-messages />
  <script type="text/javascript">
  
      $(document).ready(function() {
      $(".inset-0").delay(2500).fadeOut(300);
           });

        
    </script>

  
    @stop


</x-admin-master>



       {{-- <form method="POST" class="form" action="" enctype="multipart/form-data">
        @csrf
        
          

           <div class="form-group post_image">
            <label for="post_image">عکس</label>
            <input class="form-control-file" name="post_image" type="file">
           </div>

           
            
           <div class="form-group">
               <label  for="body">متن</label>

               <textarea class="form-control my-editor" name="body" id="mytextarea" cols="30"  rows="20"></textarea>
            
           </div>
             
           <button class="btn btn-primary update" >ویرایش</button>
           
       </form> --}}