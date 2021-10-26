
//variable globales
const  formInventory = document.querySelector('#formInventory')
 let arratInventary =[];


 //funciones
 const CreateInventary = (id, name, mark, price, amount) => {

     let item ={
         id:id,
         name:name,
         mark:mark,
         price: price,
         amount: amount
     }

     arratInventary.push(item);
     return item;
 }

 const savedLocalStorage = () => {
     localStorage.setItem('createInventory', JSON.stringify(arratInventary) )
 }


 //eventListener

formInventory.addEventListener('submit', (e)=>{
    e.preventDefault();

    let id = document.querySelector('#txt1').value;
    let name = document.querySelector('#txt2').value;
    let mark = document.querySelector('#txt3').value;
    let price = document.querySelector('#txt4').value;
    let amount = document.querySelector('#txt5').value;

    CreateInventary(id, name, mark, price, amount);
    savedLocalStorage();
    formInventory.reset();

})


