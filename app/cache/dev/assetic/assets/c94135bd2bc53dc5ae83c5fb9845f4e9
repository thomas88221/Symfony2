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
      'url': '/update',
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
  var updateTimer = setInterval(function(){
    //document.update();
  }, 60000);
  //document.update();
});
