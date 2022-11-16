import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

Nova.booting((app, store) => {
    app.component('IndexNovaPercentField', IndexField)
    app.component('DetailNovaPercentField', DetailField)
    app.component('FormNovaPercentField', FormField)
})
