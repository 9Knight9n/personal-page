import os
for root, dirs, files in os.walk('.'):
    for file in files:
        path = os.path.join(root, file)
        if path.endswith('html'):
            with open(path, 'r') as file :
                file_data = file.read()

            # Replace the target string
            file_data = file_data.replace('index.php', 'index.html')

            # Write the file out again
            with open(path, 'w') as file:
                file.write(file_data)
