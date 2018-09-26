<template>
    <span>{{ field.value }}<span v-if="field.displayPercentSign"> %</span></span>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
}
</script>
