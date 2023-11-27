class CreateTargets < ActiveRecord::Migration[7.0]
  def change
    create_table :targets do |t|
      t.string :name
      t.datetime :due_time

      t.timestamps
    end
  end
end
