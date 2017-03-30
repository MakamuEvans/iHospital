<template>
    <div class="row">
        <h3>Search Client to Start ticket</h3>
        <hr>
        <h6>the search takes only student id no., national id number or name</h6>
        <div class="form-group">
            <input type="text" class="form-control" v-model="searchTerm">
        </div>
        <div class="form-group">
            <button class="form-control btn btn-primary" @click="searchClient">{{ buttonText }}</button>
        </div>
    </div>
</template>

<script>
    export default {
        mounted: function() {
            console.log('Component mounted.')
        },
        data: function(){
            return{
                searchTerm: '',
                buttonText: 'Search'
            }
        },
        methods:{
            searchClient: function () {
                var relation=this
                this.buttonText = 'Searching...'
                console.log(base_url+'/tickets/search?term='+this.searchTerm);
                axios.get(base_url+'/tickets/search?term='+this.searchTerm)
                    .then(function (response) {
                        console.log(response);
                    }).catch(function (error) {
                    console.log(error);
                });

            }
        }
    }
</script>
