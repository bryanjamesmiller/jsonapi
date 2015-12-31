Vue.component('tasks', {
    template: '#tasks-template',
    data: function () {
        return {
            list: []
        };
    },
    created(){
        $.getJSON('pretend-api', function(data){
            console.log(data);
        });
    }
});

new Vue({
    el: 'body'
});
