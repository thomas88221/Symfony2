// hide all errors
/*document.allErrors = [];
window.onerror = function(message, url, lineNumber) {
  document.allErrors.push({
    'message': message,
    'url': url,
    'lineNumber': lineNumber
  });
  return true;
};
document.getAllErrors = function () {
  if (document.allErrors.length == 0) {
    console.dir("Aucune erreur détectée");
  } else {
    for (i in document.allErrors) {
      console.dir(document.allErrors[i]);
    }
  }
};*/

$(function(){
  var nbNotifsError = 0;
  var elements = {
    'messages': $('#notif-messages'),
    'divers': $('#notifs-divers')
  };
  var checksums = {};
  var datasPhp =  {
    'module': $('#data-php-module').val(),
    'action': $('#data-php-action').val(),
  };

  // Functions globales
  document.showAlert = function(msg, cls){
    $('#display-message')
      .attr('class', 'alert alert-block alert-'+cls)
      .find('.message').html(msg);
  };
  document.hideAlert = function(){
    $('#display-message').addClass('hide');
  };
  document.showError = function(msg){
    document.showAlert(msg, 'danger');
  };
  document.showSuccess = function(msg){
    document.showAlert(msg, 'success');
  };
  document.showWarning = function(msg){
    document.showAlert(msg, 'warning');
  };
  document.showInfos = function(msg){
    document.showAlert(msg, 'info');
  };
  $('#hide-message').on('click', function(e){
    document.hideAlert();
    e.preventDefault();
  });
  $('#hide-message-session').on('click', function(e){
    $('#alert-session').addClass('hide');
    e.preventDefault();
  });
  // Notifs
  document.update = function(){
    $.ajax({
      'url': '/ajax/update',
      'type': 'POST',
      'dataType': 'json',
      'success': function(res){
        // Messages
        if(checksums['messages'] != res['messages']['checksum']){
          elements.messages.find('.messages-list').empty();
          if(res['messages']['length'] > 0){
            elements.messages.find('i.fa-envelope').addClass('icon-animated-vertical');
            elements.messages.find('a.dropdown-toggle span.badge')
                             .removeClass('hide')
                             .html(res['messages']['length']);
            elements.messages.find('.notifs-messages-value')
                             .html(res['messages']['length'])
                             .append(res['messages']['length'] <= 1 ? ' Message' : ' Messages');
            $.each(res['messages']['datas'], function(index, row){
              elements.messages.find('.messages-list').append(
                '<li>'+
                  '<a href="/utilisateur/'+row['user_id']+'/profil">'+
                    '<img src="/images/profils/'+row['avatar']+'" class="msg-photo" alt="'+row['pseudo']+'">'+
                    '<span class="msg-body">'+
                      '<span class="msg-title">'+
                        '<span class="blue">'+row['pseudo']+':&nbsp;</span>'+
                        row['message']+
                      '</span>'+
                      '<span class="msg-time">'+
                        '<i class="ace-icon fa fa-clock-o"></i>'+
                        '<span class="margin-left-10">'+row['date']+'</span>'+
                      '</span>'+
                    '</span>'+
                  '</a>'+
                '</li>'
              );
            });
          } else {
            elements.messages.find('a.dropdown-toggle span.badge')
                             .addClass('hide');
            elements.messages.find('.messages-list').html('<li><h5 class="text-center">Aucun nouveau message</h5></li>');
            elements.messages.find('i.fa-envelope').removeClass('icon-animated-vertical');
            elements.divers.find('.notifs-messages-value').html('0 Message');
          }
          checksums['messages'] = res['messages']['checksum'];
        }
        // Divers
        if(checksums['divers'] != res['divers']['checksum']){
          elements.divers.find('.divers-list').empty();
          if(res['divers']['length'] > 0){
            elements.divers.find('i.fa-bell').addClass('icon-animated-bell');
            elements.divers.find('a.dropdown-toggle span.badge')
                             .removeClass('hide')
                             .html(res['divers']['length']);
            elements.divers.find('.notifs-divers-value')
                             .html(res['divers']['length'])
                             .append(res['divers']['length'] <= 1 ? ' Notification' : ' Notifications');
            $.each(res['divers']['datas'], function(index, row){
              elements.divers.find('.divers-list').append(
                '<li>'+
                  '<a href="/utilisateur/'+row['user_id']+'/profil">'+
                    '<div class="clearfix">'+
                      '<span class="pull-left">'+
                        '<i class="margin-right-10 btn btn-xs no-hover fa fa-'+row['type']+'"></i>'+
                        row['label']+
                      '</span>'+
                    '</div>'+
                  '</a>'+
                  '<div class="row">'+
                    '<div class="col-xs-6">'+
                      '<button class="btn btn-danger btn-xs relation-refuse" data-id="'+row['user_id']+'" >'+
                        '<i class="fa fa-check-circle margin-right-10"></i>'+
                        'Refuser'+
                      '</button>'+
                    '</div>'+
                    '<div class="col-xs-6 text-right">'+
                      '<button class="btn btn-success btn-xs relation-accept" data-id="'+row['user_id']+'" >'+
                        '<i class="fa fa-check-circle margin-right-10"></i>'+
                        'Accepter'+
                      '</button>'+
                    '</div>'+
                  '</div>'+
                '</li>'
              );
            });
          } else {
            elements.divers.find('a.dropdown-toggle span.badge')
                             .addClass('hide');
            elements.divers.find('.divers-list').html('<li><h5 class="text-center">Aucune nouvelle action</h5></li>');
            elements.divers.find('i.fa-bell').removeClass('icon-animated-bell');
            elements.divers.find('.notifs-divers-value').html('0 Notification');
          }
          checksums['divers'] = res['divers']['checksum'];
        }

        // Events
        elements.divers.find('.relation-accept, .relation-refuse').on('click', function(e){
          var self = $(this);
          var btns = self.parents('.row:first').find('.btn').attr('disabled', 'disabled');
          var id = self.data('id');
          var type = 1;
          if(self.hasClass('relation-refuse')) type = 2;
          $.ajax({
            'url': '/utilisateur/relation/maj',
            'type': 'POST',
            'dataType': 'json',
            'data': {
              'type': type,
              'id': id
            },
            'success': function(res){
              switch(type){
                case 1: document.showSuccess('Vous êtes amis'); break;
                case 2: document.showSuccess('Demande refusée'); break;
              }
              if(datasPhp.module == 'friends' && datasPhp.action == 'index'){
                window.location.reload();
              } else {
                document.update();
              }
            },
            'error': function(res){
              document.showError(res.responseText);
            }
          });

          e.preventDefault();
          return false;
        });
      },
      'error': function(res){
        if(nbNotifsError == 0){
          document.showError('Une erreur est survenue pendant la récupération des notifications');
          nbNotifsError = 1;
        }
      }
    });
  };
  
  document.addScript = function(src, onload){
    var script = document.createElement ('script');
    script.addEventListener ("load", onload, false);
    script.type = "text/javascript";
    script.src = src;
    document.getElementsByTagName ('head')[0].appendChild (script);
  };
  
  document.addStyle = function(src){
    var style = document.createElement ('link');
    style.type = "text/css";
    style.href = src;
    style.media = "screen";
    style.rel = "stylesheet";
    document.getElementsByTagName ('head')[0].appendChild (style);
  };
  
  var updateTimer = setInterval(function(){
    document.update();
  }, 60000);
  document.update();
});

/***** PAGES *****/

var Dashboard = function(params){
  document.addStyle("/css/other/bootstrap-editable.css");
  document.addScript("/js/other/bootstrap-editable.js", function(){
    $.fn.editable.defaults.mode = 'inline';
    $('.editable').editable({
      'url': '/compte/update',
      'error': function(res){
        document.showAlert(res.responseText.substring(1, res.responseText.length-1), 'danger');
      }
    });
    $('.tooltip-perso').tooltip();
  });
  var self = this;
  
  this.bind = function(){
    var self = this;
    $('#avatar').on('click', function(){
      $('#avatar').addClass('hide');
      $('#avatar-change-container').removeClass('hide');
    });
    $('#avatar-change-container .editable-buttons .editable-cancel').on('click', function(){
      $('#avatar').removeClass('hide');
      $('#avatar-change-container').addClass('hide');
    });
    $('#avatar-input').on('change', function(e){
      var files = this.files;
      var parent = $(this).parent();
      var icon = parent.find('i.fa-picture-o');
      var title = parent.find('span.ace-file-container');
      if(files.length > 0){
        icon.css('color', '#2a8bcb');
        title.attr('data-title', files[0]['name']);
      } else {
        icon.css('color', '#d5d5d5');
        title.attr('data-title', "Changer d'image");
      }
      e.preventDefault();
    });
    $('.profile-contact-info a').on('click', function(e){
      self.updateSocial(this, 'show');
      e.preventDefault();
    });
    $('#updateSocial .cancel').on('click', function(e){
      self.updateSocial(this, 'cancel');
      e.preventDefault();
    });
    $('#updateSocial .validate').on('click', function(e){
      self.updateSocial(this, 'validate');
      e.preventDefault();
    });
  };
  
  this.updateSocial = function(obj, step){
    var self = this;
    if(step == null) return this;
    switch(step){
      case 'show':
        var type = $(obj).data('social');
        var input = $('#updateSocial #inputSocial');
        var data = $('#social-'+type).val();
        input.val(data);
        $('#updateSocial').removeClass('hide');
        $('#social-type').val(type);
        break;
      case 'validate':
        var type = $('#social-type').val();
        var val = $('#inputSocial').val();
        $.ajax({
          'url': '/compte/update',
          'type': 'POST',
          'dataType': 'json',
          'data': {
            'name': 'social',
            'value': val,
            'type': type
          },
          'success': function(res){
            $('#updateSocial').addClass('hide');
            $('#social-links a[data-social="'+type+'"]').attr('href', val);
            $('#social-'+type).val(val);
          },
          'error': function(res){
            document.showAlert(res.responseText, 'danger');
          }
        });
        break;
      case 'cancel':
        $('#updateSocial').addClass('hide');
        break;
    }
  };
  
  return this.bind();
};

var Friends = function(params){ 
  var self = this; 
  this.spinnerSearch = $('#spinner-search'); 
  this.buttonSearch = $('#button-search'); 
  this.inputSearch = $('#input-search'); 
  this.resultsSearch = $('#results-search'); 
  this.offset = 0; 
  this.limit = 10; 
  this.urls = { 
    'search': '/friends/search' 
  }; 
  this.search = function(obj, next){ 
    var self = this; 
    var val = this.inputSearch.val(); 
    console.dir(this.inputSearch);
    if(val.length == 0) return; 
    $(obj).attr('disabled', 'disabled'); 
    if(next != true){ 
      self.spinnerSearch.removeClass('hide'); 
    } else { 
      $(obj).find('i').removeClass('fa-share').addClass('fa-refresh fa-spin'); 
    } 
    $.ajax({ 
      'url': self.urls['search'], 
      'type': 'POST', 
      'dataType': 'json', 
      'data': { 
        'val': val, 
        'limit': self.limit, 
        'offset': self.offset 
      }, 
      'success': function(res){
        self.spinnerSearch.addClass('hide'); 
        if(res.length == 0 && next != true){ 
          self.resultsSearch.find('tfoot').addClass('hide'); 
          self.resultsSearch.removeClass('hide').find('tbody').html('<tr><td><h5 class="text-center">Il n\'y a pas de résultat</h5></td></tr>'); 
        } else {
          var html = ''; 
          var i = 0; 
          $.each(res, function(name, datas){ 
            html += '<tr>'+ 
              '<td class="img width-50p text-center align-middle">'+ 
                '<img src="'+datas['th']+'" />'+ 
              '</td>'+ 
              '<td class="align-middle">'+ 
                datas['username']+ 
              '</td>'+ 
              '<td class="btn-case text-center width-50p">'+ 
                '<a href="'+datas['url']+'" class="btn btn-primary">'+ 
                  '<i class="fa fa-user margin-right-20"></i>'+ 
                  datas['text']+ 
                '</a>'+ 
              '</td>'+ 
            '</tr>'; 
            i++; 
          }); 
          if(i == self.limit){ 
            self.resultsSearch.find('tfoot').removeClass('hide'); 
          }else{ 
            self.resultsSearch.find('tfoot').addClass('hide'); 
          } 
          self.resultsSearch.removeClass('hide').find('tbody').append(html); 
        } 
        $(obj).removeAttr('disabled', 'disabled'); 
        if(next == true){ 
          $(obj).find('i').addClass('fa-share').removeClass('fa-refresh fa-spin'); 
        } 
      }, 
      'error': function(res){ 
        self.spinnerSearch.addClass('hide'); 
        document.showAlert(res.responseText, 'danger'); 
        $(obj).removeAttr('disabled', 'disabled'); 
      } 
    }); 
  };
  
  this.bind = function(){ 
    var self = this; 
    this.buttonSearch.on('click', function(e){ 
      self.resultsSearch.removeClass('hide').find('tbody').empty(); 
      self.offset = 0; 
      self.search(this); 
      e.preventDefault(); 
    }); 
    this.resultsSearch.find('tfoot .next').on('click', function(e){ 
      self.offset += self.limit; 
      self.search(this, true); 
      e.preventDefault(); 
    }); 
    this.inputSearch.on('keyup', function(e){ 
      if(e.keyCode == 13){ 
        self.buttonSearch.trigger('click'); 
        e.preventDefault(); 
      } 
    }); 
    
    return self; 
   };
 
  return this.bind(); 
}; 
