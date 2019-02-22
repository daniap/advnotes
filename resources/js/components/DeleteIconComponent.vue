<template>
    <span v-on:click="removeItem" class="oi oi-trash" title="delete" aria-hidden="true"></span>
</template>
<script>
export default {
    props:['note'],
    methods:{
        removeItem(){
            console.log("is remove", this.note);
            var path = '/api/notes/' + this.note.id;
            axios.delete(path).then(
                (response) => {
                    console.log("note deleted", response)
                    this.removeFromList();
                }                    
            ).catch(
                (error) => {
                    console.log("cant delete note", error)
                }
            )
        },
        removeFromList() {
            console.log("is removeFromList", this.note);
            this.$emit('removeFromList', this.note);
        }
    }

}
</script>
