<!DOCTYPE html>
<html>
<head>
  <h1> Registration </h1>
  include 'Mydb.php';
</head>  
<body>
<form>	
     <table>		
           <tr>			
               <td>				
                   Name : 
               </td>			
               <td>				
                   <input type=”text” name=””>			
               </td>		
           </tr>
           <tr>
               <td>				
                   Email :			
               </td>			
               <td>				
                   <input type=”text” email=””>		         
                </td>	
            </tr>
            <tr>
               <td>				
                   User name :			
               </td>			
               <td>				
                   <input type=”text” user name=””>

               </td>	
            </tr>	
            <tr> 

               <td>				
                   Password :
               </td>			
               <td>				
                   <input type=”text” password=””>			
                </td>	
             </tr>
             <tr>

                 <td>				
                   Confirm password:
               </td>			
               <td>				
                   <input type=”text” confirm password =””>			
                </td>	
             </tr>
             <tr>

                <td>				
                   Gender: 
                </td>			
                <td>
                    <input type="checkbox" name="Male" value="Male">                           Male<br> <input type="checkbox" name="Female"                             value="Female"> Female<br> <input type="checkbox"                         name="Others”value="Others"> Others<br>
                </td>
              </tr>
                <td>

              <label>
                     Date of birth : 
                    <input type="date" name="bday">
              </label>
                </td>
                     <p><button>Submit</button></p>
                     <p><button>Reset</button></p>


     </table>
</form> 
</body>
</html>