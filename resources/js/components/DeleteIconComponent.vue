<template>
    <span v-on:click="removeItem" class="oi oi-trash" title="delete" aria-hidden="true"></span>
</template>
<script>
export default {
    props:['note'],
    methods:{
        removeItem(){
            var path = '/api/notes/' + this.note.id;
            axios.delete(path).then(
                (response) => {
                    this.removeFromList();
                }                    
            ).catch(
                (error) => {
                    console.log("cant delete note", error)
                }
            )
        },
        removeFromList() {
            this.$emit('removeFromList', this.note);
        }
    }

}
</script>
