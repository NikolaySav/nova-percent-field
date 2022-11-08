import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
  app.component('index-nova-percent-field', IndexField)
  app.component('detail-nova-percent-field', DetailField)
  app.component('form-nova-percent-field', FormField)
})
