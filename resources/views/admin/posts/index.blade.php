<x-admin-master>
   @section('title')
   
 
       
   @stop

    @section('content')

    <div class="all-posts">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary "> پست ها </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="example" class="display table" style="width:100%">
              <thead>
                <tr>
                  <th>ایدی</th>
                  <th>نویسنده</th>
                  <th>عنوان</th>
                  <th>تگ ها</th>
                  <th class="table-haad-likes"><ion-icon class="like-table-head" name="heart"></ion-icon></th>
                  <th ><ion-icon class="comment-icon" name="chatbox-outline"></ion-icon></th>
                  <th> زمان ساخت </th>
                  <th> تغییرات </th> 
                </tr>
              </thead>
              <tbody>
        
                @foreach ($posts as $post )
                    <tr>
                    <th>{{ $post->id }}</th>
                    <th>{{ $post->user->name }}</th>
                    <th> {{ Str::limit($post->title , 20 ) }}</th>
                    <th>
                      @foreach ($post->categories as $category )
                         <span>{{ $category->name }} ,</pspan>
                      @endforeach
                    </th>
                    <th>
                      @foreach ($post->tags as $tag )
                         <span>{{ $tag->name }} ,</pspan>
                      @endforeach
                    </th>
                    <th>
                      <span>1000</span>
                    </th>
                    <th>
                      <span>1000</span>
                    </th>
                   
                    <th>{{ $post->created_at }}</th>
        
                    <th style="border-bottom: none" >
                        <div class="action-th d-flex flex-row">
        
                       <a href="{{ route('posts.show' , $post->id ) }}">

                         <button class="d-flex btn btn-success">
                          <ion-icon class="view-icon " name="eye"></ion-icon>
                         </button>

                       </a>
        
                      <button value="" data-id="{{ $post->id }}" id="delete-post" class="delete-post-btn d-flex btn btn-danger" data-toggle="modal" data-target="#myModal">
                        <form id="myPostDestroyForm" action="{{ route('posts.destroy' , $post->id ) }}" method="POST">
                          @csrf
                          @method('DELETE')
                        </form>
                       <ion-icon class="delete-icon " name="trash"></ion-icon>
                      </button>
                      
                       <a href="{{ route('posts.edit' , $post->id ) }}">
                      <button class="d-flex btn btn-primary">
                       <ion-icon class=" edit-icon" name="create"></ion-icon>
                      </button>
                    </a>
                      </div>
                    </th> 
                  </tr>
                 
                @endforeach
               </tbody>
               
             
              <tfoot>
                <th>ایدی</th>
                <th>نویسنده</th>
                <th>عنوان</th>
                <th>دسته بندی</th>
                <th>تگ ها</th>
                <th class="table-haad-likes"><ion-icon class="like-table-head" name="heart"></ion-icon></th>
                <th class="comment-icon"><ion-icon name="chatbox-outline"></ion-icon></th>
                <th> زمان ساخت </th>
                <th> تغییرات </th>
                
                
                
              </tfoot>
          </table>
           
                  

          </div>
        </div>
      </div> 

  
    </div>
    </div>  


<!-- Modal -->       
<div class="post-delete-modal">


<div id="myModal" class="modal fade" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
    <div class="d-flex align-items-center justify-content-between modal-header">
      <h4 class="modal-title text-danger"> اخطار! </h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <div class="modal-body">
      <p> ایا می خواهید که پست حذف شود؟ </p>
    </div>
    <div class="modal-footer">

      <button id="destroyBtn" type="submit" name="delete" class="btn btn-danger">حذف</button>
      
      <button type="button" class="btn btn-default" data-dismiss="modal">بستن</button>
    </div>
   
  </div>

</div>

</div>
</div>
  
  
  
    {{-- <table id="example" class="display" style="width:100%">
      <thead>
        <tr>
          <th>ایدی</th>
          <th>نویسنده</th>
          <th>عنوان</th>
          <th>دسته بندی</th>
          <th>تگ ها</th>
          <th class="table-haad-likes"><ion-icon class="like-table-head" name="heart"></ion-icon></th>
          <th> زمان ساخت </th>
          <th> تغییرات </th> 
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $post )
            <tr>
            <th>{{ $post->id }}</th>
            <th>{{ $post->user->name }}</th>
            <th> {{ Str::limit($post->title , 20 ) }}</th>
            <th>
              @foreach ($post->categories as $category )
                 <span>{{ $category->name }} ,</pspan>
              @endforeach
            </th>
            <th>
              @foreach ($post->tags as $tag )
                 <span>{{ $tag->name }} ,</pspan>
              @endforeach
            </th>
            <th>
              <p>1000</p>
            </th>
           
            <th>{{ $post->created_at }}</th>

            <th style="border-bottom: none" >
                <div class="action-th d-flex flex-row">

               
              <button class="d-flex btn btn-success">
               <ion-icon class="view-icon " name="eye"></ion-icon>
              </button>

              <button value="" data-id="{{ $post->id }}" id="delete-post" class="delete-post-btn d-flex btn btn-danger" data-toggle="modal" data-target="#myModal">
               <ion-icon class="delete-icon " name="trash"></ion-icon>
              </button>
           
              <button class="d-flex btn btn-primary">
               <ion-icon class=" edit-icon" name="create"></ion-icon>
              </button>
              </div>
            </th> 
          </tr>
         
        @endforeach
       </tbody>
       
     
      <tfoot>
        <th>ایدی</th>
        <th>نویسنده</th>
        <th>عنوان</th>
        <th>دسته بندی</th>
        <th>تگ ها</th>
        <th class="table-haad-likes"><ion-icon class="like-table-head" name="heart"></ion-icon></th>
        <th> زمان ساخت </th>
        <th> تغییرات </th>
        
        
        
      </tfoot>
  </table> --}}
           
  

    @stop
  
  @section('script')
  
  <script>
         
    $(document).on('click' , '.delete-post-btn' , function () {
        
        var postId = $(this).data('id');
           
          $("#sendPostId").val(postId);
       
       
    } );

 </script>
  
  <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable( {
      "bInfo" : true ,
      "oLanguage": {

         "sSearch": "",
         "sLengthMenu": "نمایش _MENU_ ردیف",
         "sInfo":""
        },

        "language": {
             "paginate": {
               "previous": " قبلی",
               "first": "اول",
               "next": "بعدی" ,
               "last": "اخر"
              }

              },

        

    } );

 
   $("#example_wrapper .row").first().addClass('pr-2 pt-4 pb-4');
   $("#example_wrapper .row").first().children().first().removeClass();
   $("#example_wrapper .row").first().children().first().addClass('count-of-record')
   $("#example_wrapper .row").first().children().last().removeClass();
   $("#example_wrapper .row").first().children().last().addClass("search-the-table");
   $("#example_wrapper .row").last().addClass('p-4 justify-content-center');
   $("#example_wrapper .row").last().children().first().css('display','none');
   $("#example_wrapper .row").last().children().last().removeClass();
   $("#example_filter label input").attr("placeholder", "جست و جو");;
  
} );
      
$(document).ready(function(){

       
$('#destroyBtn').click(function() {

         
         var postsDestroy = $("#postsDestroy");
         
                  console.log('hello');
           
                $('#myPostDestroyForm').submit();


 });

});        
     

      

  </script>
      
  @stop

</x-admin-master>    