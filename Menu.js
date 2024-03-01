// JavaScript Document

function ListarModulos(){
				 $("#IdCuerpo").html("")
				 $("#IdMenuIzquierdo").html("")
				 $.ajax({
                      url:'controlador/Cmenu.php',
                      type:'POST',
					  dataType:"JSON",
					  data:{accion:'LISTAR'},
                      beforeSend:function(){
                          $('#modal .modal-body').append('<div class="widget-box-overlay">'+
                             '<i class="ace-icon loading-icon fa fa-spin fa-circle-o-notch fa-5x white"></i>'+
                             '</div>');
                          $('#modal .modal-footer').hide();
                  },
                  success:function(data){
					// alert(data.length)
					for(i=0;i<data.length;i++){
					   $("#IdCuerpo").append( "<div id="+data[i][0]+" class='col-xs-12 col-sm-3 center' style='cursor:pointer' onclick='ListarSubmenus("+data[i][0]+")'>"+
												"<span class='profile-picture'>"+
													"<img id='avatar' class='editable img-responsive' alt='LABORATORIO' src='"+data[i][2]+"' height='150' width='150' />"+
												"</span>"+

												"<div class='space-4'></div>"+

												"<div class='width-65 label label-info label-xlg arrowed-in arrowed-in-right'>"+
													"<div class='inline position-relative'>"+
														"<a href='#' class='user-title-label dropdown-toggle' data-toggle='dropdown'>"+
															"<i class='ace-icon fa fa-circle light-green'></i>&nbsp;"+
															"<span class='white'>"+data[i][1]+"</span>"+
														"</a>"+					
													"</div>"+
												"</div>"+
											
                                           " <div class='space-6'></div>"+
							"</div>")
					
					 $("#IdMenuIzquierdo").append("<li onclick='ListarSubmenus("+data[i][0]+")'>"+
												"<a href='#'>"+
													"<i class='menu-icon'><img src='"+data[i][2]+"' style='border:0'  height='25' width='25' ></i>"+
													"<span class='menu-text'> "+data[i][1]+" </span>"+
												"</a>"+
												"<b class='arrow'></b>"+
											"</li>")
					 }
					
                  }
                });
			 }
		
		function ListarSubmenus($idmenu){
			$("#IdSubmenu").html("")
			$.ajax({
                      url:'controlador/Cmenu.php',
                      type:'POST',
					  dataType:"JSON",
					  data:{accion:'SUBMENUS',id:$idmenu},
                      success:function(data){
				          for(i=0;i<data.length;i++){
		                        alert(ListarMenuSubmenu(data[i][0]))
						     $("#IdSubmenu").append("<li class='hover'>"+
						                               "<a href='#' class='dropdown-toggle'>"+
							                               "<i class='menu-icon'><img src='"+data[i][2]+"' style='border:0'  height='25' width='25' ></i>"+
							                               "<span class='menu-text'>"+data[i][1]+"</span>"+
						                               "</a>"+
						                               "<b class='arrow'></b>"+ListarMenuSubmenu(data[i][0])+
					                                 "</li>")
						    
						   }
				      }
              });
		 }
		 
		 ListarModulos()
		 
	    var $desplegable='';	 
		function ListarMenuSubmenu($id){
		   return $.ajax({
                      url:'controlador/Cmenu.php',
                      type:'POST',
					  dataType:"JSON",
					  data:{accion:'MENUSUBMENUS',id:$id},
                      success:function(data){
				         if (data.length>0){
							         $desplegable="<ul class='submenu'>";
						     for(j=0;j<data.length;j++){
							         $desplegable+="<li class='hover'>"+
								                     "<a href='#'>"+
									                   "<i class='menu-icon fa fa-caret-right'></i>"+ data[j][1]+"</a>"+ 
  							                         "<b class='arrow'></b>"+
							                       "</li>";                                  
							 }
							         $desplegable+="</ul>";
									// alert($desplegable)
									// return $desplegable;
									
						  }

				      }
              });
			  
			 //  return $desplegable;
		 }