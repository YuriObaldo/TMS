CREATE TABLE tasks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(150) NOT NULL,
  status VARCHAR(20) NOT NULL DEFAULT 'pending',
  task_date DATE NOT NULL,
  created_at DATETIME NOT NULL
);

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  full_name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
  ('Review for midterms exam',     'done',    CURDATE() - INTERVAL 1 DAY, NOW()),
  ('Finish pending formatives',    'done',    CURDATE() - INTERVAL 1 DAY, NOW()),
  ('Buy groceries',                'pending', CURDATE(),                  NOW()),
  ('Submit project',               'pending', CURDATE(),                  NOW()),
  ('Wash the car and motorcycle',  'done',    CURDATE(),                  NOW()),
  ('Go to gym',                    'pending', CURDATE(),                  NOW()),
  ('Clean the room',               'pending', CURDATE() + INTERVAL 1 DAY, NOW()),
  ('Run some errands',             'pending', CURDATE() + INTERVAL 1 DAY, NOW()),
  ('Go to gym',                    'pending', CURDATE() + INTERVAL 3 DAY, NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
  ('yvobaldo', 'Yuri Miguel V. Obaldo', 'yuriobaldo@gmail.com', NOW());