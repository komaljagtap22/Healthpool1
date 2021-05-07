<!DOCTYPE html>  
 <html>  
      <head>  
           <title>Company Data</title>  
           <title>Show  Data in Datatables</title>  
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>  
           <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
		   
		    <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
		    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
		   
		   
 		   
		   <script  src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script> 
		   <script  src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script> 
		   <script  src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>  
		    <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>  
			 <script  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>  
			  <script  src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>  
			  <script  src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>  
		   
		   
		   
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h1 align="center">Show Data </h3><br />  
                <h3 align="center">Company Database</h3><br />  
                <table id="data-table" class="table table-bordered">  
                     <thead>  
                          <tr>  
                               <th>Name</th>  
                               <th>Email</th>  
							   <th>Address</th> 
							    <th>Website</th> 
                               <th>Image</th> 
							   
                                
                          </tr>  
                     </thead>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#data-table').DataTable({
		    dom: 'Bfrtip',
        buttons: [
            'excel'
        ],
           "ajax"     :     "employee_data.json",  
		  
           "columns"     :     [  
                {     "data"     :     "name"     },  
                {     "data"     :     "email"},
				 {     "data"     :     "addresses[1].street"},
				  {     "data"     :     "website"},
				 {     "data"     :     "image"}
           ]
		  
		   

       		   
      });  
 });  
 </script>  