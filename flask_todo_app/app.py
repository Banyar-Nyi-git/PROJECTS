from flask import Flask, request, jsonify, render_template

app = Flask(__name__)

# In-memory task storage
tasks = []

# Route to serve the homepage (frontend)
@app.route('/')
def home():
    return render_template('index.html')

# API route to get all tasks
@app.route('/tasks', methods=['GET'])
def get_tasks():
    return jsonify(tasks)

# API route to add a new task
@app.route('/tasks', methods=['POST'])
def add_task():
    task_data = request.get_json()
    task = {'id': len(tasks) + 1, 'title': task_data['title']}
    tasks.append(task)
    return jsonify({'message': 'Task added successfully!', 'task': task})

# API route to delete a task
@app.route('/tasks/<int:task_id>', methods=['DELETE'])
def delete_task(task_id):
    global tasks
    tasks = [task for task in tasks if task['id'] != task_id]
    return jsonify({'message': 'Task deleted successfully!'})

if __name__ == '__main__':
    app.run(debug=True)
