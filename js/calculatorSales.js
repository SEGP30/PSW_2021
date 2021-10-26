
const formSales = document.querySelector('#formSales');

//funciones

const calculateIva = (value, iva) => {

    let ivaConst =(iva/100);

    let valueIva =  value * ivaConst;
    return valueIva;
}

const calculateUtility = (value, utility) => {
    let utilityConst = (utility/100);

    let valueUtility = value * utilityConst;
    return valueUtility;
}

const SaleValue = (value, utility, iva) => {
    let valueInt = parseInt(value);
    let utilityInt = parseInt(utility);
    let ivaInt = parseInt(iva);

    const totalSale = (valueInt + calculateIva(valueInt, ivaInt) + calculateUtility(valueInt, utilityInt) );
  return totalSale;
}

//eventListener

formSales.addEventListener('submit', (e)=>{
    e.preventDefault();

    let value = document.querySelector('#value').value;
    let utility = document.querySelector('#utility').value;
    let iva = document.querySelector('#iva').value;


    let Iva = calculateIva(value, iva);
    let Utility = calculateUtility(value, utility);
    let Sales = SaleValue(value, utility, iva);

    document.getElementById("valuesale").value = Sales;
    document.getElementById("gain").value = Utility;

    formSales.reset();

})




