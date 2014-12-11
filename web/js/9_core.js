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
    'divers': $('#notifs-divers'),
    'sentences': $('#sentences')
  };
  var checksums = {};
  var datasPhp =  {
    'module': $('#data-php-module').val(),
    'action': $('#data-php-action').val(),
  };
  document.sentences = {};

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
  $.each(elements.sentences.find('div'), function(index, row){
    document.sentences[$(row).data('name')] = row.innerHTML;
  });
  $('#hide-message').on('click', function(e){
    document.hideAlert();
    e.preventDefault();
  });
  $('#hide-message-session').on('click', function(e){
    $('#alert-session').addClass('hide');
    e.preventDefault();
  });
  elements.messages.on('click', function(e){
    elements.messages.find('.messages-list').html(
      '<li>'+
        '<div class="text-center">'+
          '<img src="/images/loading.gif" />'+
        '</div>'+
      '</li>'
    );
    document.update({'type': 'getLastMessages'}, function(res){
      var html = '';
      if(res.length > 0){
        $.each(res, function(index, row){
          html += '<li>'+
                    '<a href="'+row['profil']+'">'+
                      '<img src="'+row['avatar']+'" class="msg-photo" alt="'+row['username']+'">'+
                      '<span class="msg-body max-width-280">'+
                        '<span class="msg-title">'+
                          '<span class="blue">'+row['username']+':&nbsp;</span>'+
                            row['message']+
                          '</span>'+
                        '<span class="msg-time">'+
                          '<i class="ace-icon fa fa-clock-o"></i>'+
                          '<span class="margin-left-10">'+row['date']+'</span>'+
                        '</span>'+
                      '</span>'+
                    '</a>'+
                  '</li>'
        });
        elements.messages.find('.messages-list').html(html);
      } else {
        elements.messages.find('.messages-list').html(
          '<li>'+
            '<div class="text-center">'+
              document.sentences['sentences.messages.empty']+
            '</div>'+
          '</li>'
        );
      }
    });
  });
  elements.divers.on('click', function(e){
    elements.divers.find('.divers-list').html(
      '<li>'+
        '<div class="text-center">'+
          '<img src="/images/loading.gif" />'+
        '</div>'+
      '</li>'
    );
    document.update({'type': 'getLastNotifs'}, function(res){
      var html = '';
      if(res.length > 0){
        $.each(res, function(index, row){
          html += '<li>'+
                    'prout'+
                  '</li>'
        });
        elements.divers.find('.divers-list').html(html);
        elements.divers.find('.dropdown-footer.hide').removeClass('hide');
      } else {
        elements.divers.find('.divers-list').html(
          '<li>'+
            '<div class="text-center">'+
              document.sentences['sentences.divers.empty']+
            '</div>'+
          '</li>'
        );
        elements.divers.find('.dropdown-footer').addClass('hide');
      }
    });
  });
  
  // Notifs
  document.update = function(datas, callback){
    $.ajax({
      'url': '/ajax/update',
      'type': 'POST',
      'dataType': 'json',
      'data': datas,
      'success': function(res){
        if(typeof callback == 'function') {
          callback(res);
        }
      },
      'error': function(res){
        if(nbNotifsError == 0){
          document.showError('Une erreur est survenue pendant la récupération des notifications');
          nbNotifsError = 1;
        }
      }
    });
  };
  
  function setNotifCount(type, datas){
    if(datas[type] == null) return;
    if(datas[type] == 0){
      elements[type].find('a.dropdown-toggle span.badge')
                    .addClass('hide');
    } else {
      elements[type].find('a.dropdown-toggle span.badge')
                    .removeClass('hide')
                    .html(datas[type]);
      var spanShow = elements[type].find('.notifs-'+type+'-value.singular');
      var spanHide = elements[type].find('.notifs-'+type+'-value.plural');
      if (datas[type] > 1) {
        spanShow = elements[type].find('.notifs-'+type+'-value.plural');
        spanHide = elements[type].find('.notifs-'+type+'-value.singular');
      }
      spanHide.addClass('hide');
      var html = spanShow.get(0).innerHTML;
      spanShow.html(
        datas[type] + ' ' +
        html.substring(html.indexOf(' '))
      ).removeClass('hide');
    }
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
    document.update({'type': 'count'}, function(res){
      setNotifCount('messages', res);
      setNotifCount('divers', res);
    });
  }, 60000);
  document.update({'type': 'count'}, function(res){
    setNotifCount('messages', res);
    setNotifCount('divers', res);
  });
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
var Profil = function(params){
  var self = this;
  self.sendMessageBtn = $('#send-message-btn');
  self.sendMessage = $('#send-message');
  self.sendMessageConfirm = $('#send-message-confirm');
  self.sendMessageText = $('#send-message-text');
  self.id = $('#id').val();
  self.urlMsg = $('#urlMsg').val();
  $('.tooltip-perso').tooltip();
  
  self.bind = function(){
    self.sendMessageBtn.on('click', function(e){
      self.sendMessage.modal('show');
      e.preventDefault();
    });
    self.sendMessageConfirm.on('click', function(e){
      $.ajax({
        'url': self.urlMsg,
        'type': 'POST',
        'dataType': 'json',
        'data': {
          'id': self.id,
          'msg': self.sendMessageText.val()
        },
        'success': function(res){
          if (res.status == 1) {
            document.showAlert('Message envoyé', 'success');
          } else {
            document.showAlert(res.msg, 'danger');
          }
          self.sendMessage.modal('hide');
        },
        'error': function(res){
          document.showAlert(res.responseText, 'danger');
          self.sendMessage.modal('hide');
        }
      });
      e.preventDefault();
    });
    
    return self;
  };
  
  return self.bind();
};
