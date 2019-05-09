function printPayingGuests() {

  var cont = $(".paying-container");
  cont.find(".person-paying").remove();
  $.ajax({

    url : "getPayingGuests.php",
    method : "GET",
    success : function(inData) {

      var peopleArr = JSON.parse(inData);

      var template = $("#people-template").html();
      var compiled = Handlebars.compile(template);
      // console.log(peopleArr);
      for (var i = 0; i < peopleArr.length; i++) {

        var person = peopleArr[i];
        // console.log(person);
        var personHTML = compiled(person);
        cont.append(personHTML);
      }
    }
  });
}

function printAddress() {

  var me = $(this);
  var id = me.data("id");
  // console.log(id);

  $.ajax({

    url : "printAddressById.php",
    method : "GET",
    data : {
      id : id
    },
    success : function (inData) {

      var address = JSON.parse(inData);
      // console.log(address);
      var h2elem = me.find(".indirizzo");
      h2elem.html("<h2 style='color:#fff;'>address: </h2><br>" + address[0].address);
    }
  });

}

function deletePerson() {

  var me = $(this);
  var id = me.parent().data("id");
  console.log(id);
  $.ajax({

    url : "deletePersonById.php",
    method :"GET",
    data : {
      id : id
    },
    success : function () {

      printPayingGuests();
    }
  });
}

function updatePerson() {

  var me = $(this);
  var id = me.parent().data("id");
  // console.log(id);
  var name = prompt("INSERISCI UN NUOVO NOME");
  var lastname = prompt("INSERISCI UN NUOVO COGNOME");

  $.ajax({

    url : "updatePersonById.php",
    method : "GET",
    data : {
      id : id,
      name : name,
      lastname : lastname
    },
    success : function (inData) {

      printPayingGuests();
    }
  });
}

function init() {

  printPayingGuests();
  $(document).on('click', ".person-paying", printAddress);
  $(document).on('click', ".elimina", deletePerson);
  $(document).on('click', ".modifica", updatePerson);

}

$(document).ready(init);
