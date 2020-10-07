<template>
    <panel-item :field="field">
        <template slot="value">
            <div class="mr-2 mb-2 inline-flex items-center py-2 px-3 rounded-full font-bold text-sm leading-tight bg-success-light text-success-dark"
                 v-for="(item, i) of value" :key="i">
                {{ item[label] }}
            </div>
        </template>
    </panel-item>
</template>

<script>
import FieldValues from '../mixins/FieldValues'

export default {
  mixins: [FieldValues],

  props: ['resource', 'resourceName', 'resourceId', 'field'],

  data() {
    return {
      value: {},
      show: false
    }
  },
  beforeMount() {
    this.setValueFromField()
    this.setInitialOptions()
  }
}
</script>
