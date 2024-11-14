// plugins/alert.js
import { reactive } from 'vue'

const state = reactive({
    alerts: []
})

let nextId = 0

export const useAlert = () => {
    const add = (type, message, autoClose = true, duration = 5000) => {
        const id = nextId++
        const alert = {
            id,
            type,
            message,
            autoClose,
            duration
        }
        
        state.alerts.push(alert)

        if (autoClose) {
            setTimeout(() => {
                remove(id)
            }, duration)
        }

        return id
    }

    const remove = (id) => {
        const index = state.alerts.findIndex(alert => alert.id === id)
        if (index > -1) {
            state.alerts.splice(index, 1)
        }
    }

    const success = (message, autoClose = true, duration = 5000) => {
        return add('success', message, autoClose, duration)
    }

    const error = (message, autoClose = true, duration = 5000) => {
        return add('error', message, autoClose, duration)
    }

    return {
        alerts: state.alerts,
        success,
        error,
        remove
    }
}

// Create a single instance
export const alert = useAlert()